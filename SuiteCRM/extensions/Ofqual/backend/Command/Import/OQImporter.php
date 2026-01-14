<?php

namespace App\Extension\Ofqual\backend\Command\Import;

use App\Engine\LegacyHandler\LegacyHandler;
use App\Engine\LegacyHandler\LegacyScopeState;
use Exception;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PDO;
use PDOException;
use Symfony\Component\HttpFoundation\RequestStack;
use Throwable;
use \BeanFactory;
use Psr\Log\LoggerInterface;

class OQImporter extends LegacyHandler
{
    public const HANDLER_KEY = 'ofqual-importer';
    protected $legacyDir;
    protected $projectDir;
    private $logger;

    private $aclactions;
    private $envstore;

    public function getHandlerKey(): string
    {
        return self::HANDLER_KEY;
    }
    public function __construct(
        string $projectDir,
        string $legacyDir,
        string $legacySessionName,
        string $defaultSessionName,
        LegacyScopeState $legacyScopeState,
        RequestStack $requestStack,
        LoggerInterface $logger
    ) {
        parent::__construct(
            $projectDir,
            $legacyDir,
            $legacySessionName,
            $defaultSessionName,
            $legacyScopeState,
            $requestStack
        );
        $this->legacyDir = $legacyDir;
        $this->projectDir = $projectDir;
        $this->logger = $logger;
    }

    public function initLegacy(): void
    {
        $this->switchSession($this->legacySessionName);
        chdir($this->legacyDir);
    }

    public function closeLegacy(): void
    {
        chdir($this->projectDir);
        $this->switchSession($this->defaultSessionName);
    }

    private function getOurModules(): array
    {
        global $beanList;
        $ourModules = [];
        foreach ($beanList as $moduleName => $beanClass) {
            if (str_starts_with($moduleName, 'OQ_')) {
                $ourModules[] = $moduleName;
            }
        }
        return $ourModules;
    }

    public function run()
    {
        $this->initLegacy();
        $data = $this->ParseJsonFiles();
        global $sugar_config;

        $processedObjects = [];
        if (count($data) > 0) {

            foreach ($data as $objectType => $objects) {
                if (!array_key_exists($objectType, $processedObjects)) {
                    $processedObjects[$objectType] = [];
                }

                foreach ($objects as $id => $objectData) {

                    $masterbean = BeanFactory::newBean($objectType);

                    if (!$masterbean->retrieve($id)) {
                        $bean = BeanFactory::newBean($objectType);
                        $bean->new_with_id = true;
                        $bean->id = $id;
                    } else {
                        $bean = $masterbean;
                    }
                    foreach ($objectData as $field => $value) {
                        if ($field === '_OQModifiedTime') {
                            continue;
                        }
                        $bean->$field = $value;
                    }
                    $bean->save();
                    $processedObjects[$objectType][] = $id;
                }
            }

            foreach ($processedObjects as $objectType => $ids) {
                if (
                    !empty($sugar_config['OQImporter'][$objectType]['DBSync']) &&
                    $sugar_config['OQImporter'][$objectType]['DBSync'] === true
                ) {
                    $implodedIds = "'" . implode("','", $ids) . "'";
                    $bean = BeanFactory::getBean($objectType);
                    $table = $bean->getTableName();
                    $sql = ' ' . $table . '.id NOT IN (' . $implodedIds . ')';
                    $beanList = $bean->get_full_list('', $sql);
                    foreach ($beanList as $beanToDelete) {
                        $beanToDelete->mark_deleted($beanToDelete->id);
                        $beanToDelete->save();
                    }
                }
            }
        }
        $this->closeLegacy();
    }

    private function ParseJsonFiles(): array
    {
        global $sugar_config;

        $data = [];
        $importDir = $this->projectDir;
        if (!str_ends_with($importDir, '/')) {
            $importDir .= '/';
        }
        $importDir .= $sugar_config['OQImportDir'];
        if (!str_ends_with($importDir, '/')) {
            $importDir .= '/';
        }

        $files = glob($importDir . '*.json');
        foreach ($files as $file) {
            if (str_ends_with($file, '.json')) {

                $jsonContent = file_get_contents($file);
                $tmpdata = json_decode($jsonContent, true);
                foreach ($tmpdata as $objectType => $objects) {
                    if (!isset($data[$objectType])) {
                        $data[$objectType] = [];
                    }

                    /**
                     * Ensure when importing multiple files that we get the most recent version of each object.
                     */
                    foreach ($objects as $id => $object) {
                        if (
                            array_key_exists($id, $data[$objectType]) &&
                            $data[$objectType][$id]["_OQModifiedTime"] < $object["_OQModifiedTime"]
                        ) {
                            $data[$objectType][$id] = $object;
                        } else {
                            $data[$objectType][$id] = $object;
                        }
                    }
                }
            }
        }
        return $data;
    }
}
