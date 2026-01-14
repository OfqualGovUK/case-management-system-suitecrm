<?php

/**
 * This is the Suite8 Process Handler to export workflows in Bulk.
 * It interacts with the new endpoint that can export any module records in JSON format.
 * 
 */

namespace App\Extension\Ofqual\modules\AOW_WorkFlow\Process\Service\BulkActions;

use App\FieldDefinitions\EntityFieldDefinition;
use ApiPlatform\Exception\InvalidArgumentException;
use App\Engine\LegacyHandler\LegacyHandler;
use App\Engine\LegacyHandler\LegacyScopeState;
use App\Module\Service\ModuleNameMapperInterface;
use App\Process\Entity\Process;
use App\Process\Service\ProcessHandlerInterface;
use App\Data\LegacyHandler\ListDataHandler;
use App\Data\LegacyHandler\FilterMapper\LegacyFilterMapper;
use App\Data\LegacyHandler\RecordMapper;
use BeanFactory;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;

use Symfony\Component\HttpFoundation\RequestStack;

class ExportWorkflows extends LegacyHandler implements ProcessHandlerInterface, LoggerAwareInterface
{
    protected const MSG_OPTIONS_NOT_FOUND = 'Process options are not defined';
    protected const MSG_INVALID_TYPE = 'Invalid Type';

    public const PROCESS_TYPE = 'bulk-export-workflows';

    private LoggerInterface $logger;

    public function __construct(
        string $projectDir,
        string $legacyDir,
        string $legacySessionName,
        string $defaultSessionName,
        LegacyScopeState $legacyScopeState,
        RequestStack $session,
        ModuleNameMapperInterface $moduleNameMapper
    ) {
        parent::__construct(
            $projectDir,
            $legacyDir,
            $legacySessionName,
            $defaultSessionName,
            $legacyScopeState,
            $session
        );
        $this->moduleNameMapper = $moduleNameMapper;
    }
    public function getProcessType(): string
    {
        return self::PROCESS_TYPE;
    }
    public function getHandlerKey(): string
    {
        return $this->getProcessType();
    }
    public function requiredAuthRole(): string
    {
        return 'ROLE_USER';
    }
    public function getRequiredACLs(Process $process): array
    {
        return [];
    }

    public function configure(Process $process): void
    {
        // No configuration needed
        $process->setId(self::PROCESS_TYPE);
        $process->setAsync(false);
    }

    public function validate(Process $process): void
    {
        return;
    }

    public function run(Process $process): void
    {
        $this->init();

        $options = $process->getOptions();
        if (empty($options)) {
            throw new InvalidArgumentException(self::MSG_OPTIONS_NOT_FOUND);
        }
        [
            'module' => $baseModule,
            'ids' => $baseIds,
            'criteria' => $criteria
        ] = $options;

        if ((!isset($baseIds) || count($baseIds) === 0) && is_array($criteria)) {
            try {
                $recordmapper = new RecordMapper($this->moduleNameMapper);
                $filtermapper = new LegacyFilterMapper(
                    $this->projectDir,
                    $this->legacyDir,
                    $this->legacySessionName,
                    $this->defaultSessionName,
                    $this->state,
                    $this->requestStack
                );
                $listobj = new ListDataHandler(
                    $filtermapper,
                    $recordmapper
                );
                $list = $listobj->fetch($baseModule, $criteria, 0, -1);
                $items = $list->getRecords();
                if (count($items) > 0) {
                    $baseIds = [];
                    foreach ($items as $item) {
                        $baseIds[] = $item->getId();
                    }
                }
            } catch (\Throwable $ex) {
                //do nothing
            }
        }

        $workflows = [];
        $actions = [];
        $conditions = [];

        foreach ($baseIds as $id) {
            $workflowBean = BeanFactory::getBean('AOW_WorkFlow', $id);
            if ($workflowBean) {
                $workflows[] = $id;

                // Fetch related actions
                $bean = BeanFactory::getBean('AOW_Actions');
                $actionsresult = $bean->get_full_list("name ASC", " aow_workflow_id='$id' ", false, true);
                if (count($actionsresult) > 0) {

                    // Select id from aow_actions where aow_workflow_id='$id',
                    foreach ($actionsresult as $actionRow) {
                        $actions[] = $actionRow->id;
                    }
                }
                // Fetch related conditions

                // Select id from aow_conditions where aow_workflow_id='$id',
                $bean = BeanFactory::getBean('AOW_Conditions');
                $conditionsresult = $bean->get_full_list("name ASC", " aow_workflow_id='$id' ", false, true);
                if (count($conditionsresult) > 0) {
                    foreach ($conditionsresult as $conditionRow) {
                        $conditions[] = $conditionRow->id;
                    }
                }
            }
        }
        $data['AOW_WorkFlow'] = $workflows;
        $data['AOW_Actions'] = $actions;
        $data['AOW_Conditions'] = $conditions;


        $responseData = [
            'handler' => 'export',
            'params' => [
                'url' => 'legacy/index.php?entryPoint=OQexportHandler',
                'formData' => [
                    'moduleData' => base64_encode(json_encode($data)),
                    'exportName' => 'Workflows'
                ],
            ],


        ];

        $process->setStatus('success');
        $process->setMessages([]);
        $process->setData($responseData);
    }
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }
}
