<?php

namespace App\Extension\Ofqual\backend\Menu;

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

class MenuRepairer extends LegacyHandler
{
    public const HANDLER_KEY = 'ofqual-menu-repairer';
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
        require_once 'ModuleInstall/ModuleInstaller.php';
        UpdateSystemTabs('Add', $this->getOurModules());

        $this->closeLegacy();
    }
}
