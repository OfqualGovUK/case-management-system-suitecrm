<?php

/**
 * This is the Suite8 Process Handler to export surveys in Bulk.
 * It interacts with the new endpoint that can export any module records in JSON format.
 * 
 */

namespace App\Extension\Ofqual\modules\Surveys\Process\Service\BulkActions;

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

class ExportSurveys extends LegacyHandler implements ProcessHandlerInterface, LoggerAwareInterface
{
    protected const MSG_OPTIONS_NOT_FOUND = 'Process options are not defined';
    protected const MSG_INVALID_TYPE = 'Invalid Type';

    public const PROCESS_TYPE = 'bulk-export-surveys';

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

        $surveys = [];
        $questions = [];
        $options = [];

        foreach ($baseIds as $id) {
            $surveyBean = BeanFactory::getBean('Surveys', $id);
            if ($surveyBean) {
                $surveys[] = $id;

                // Fetch related questions
                $bean = BeanFactory::getBean('SurveyQuestions');
                $questionresult = $bean->get_full_list("name ASC", " survey_id='$id' ", false, true);
                $questionoptionssql = '';
                if (count($questionresult) > 0) {
                    $result = $questionresult;

                    foreach ($result as $Row) {
                        $questions[] = $Row->id;
                        if (strlen(trim($questionoptionssql)) > 0) {
                            $questionoptionssql .= ", ";
                        }
                        $questionoptionssql .= "'" . $Row->id . "'";
                    }
                }
                // Fetch related question options

                // Select id from SurveyQuestionOptions where survey_question_id IN ($questionoptionssql),
                $bean = BeanFactory::getBean('SurveyQuestionOptions');
                $optionsresult = $bean->get_full_list("name ASC", " survey_question_id IN ($questionoptionssql) ", false, true);
                if (count($optionsresult) > 0) {
                    foreach ($optionsresult as $optionRow) {
                        $options[] = $optionRow->id;
                    }
                }
            }
        }
        $data['Surveys'] = $surveys;
        $data['SurveyQuestions'] = $questions;
        $data['SurveyQuestionOptions'] = $options;

        $responseData = [
            'handler' => 'export',
            'params' => [
                'url' => 'legacy/index.php?entryPoint=OQexportHandler',
                'formData' => [
                    'moduleData' => base64_encode(json_encode($data)),
                    'exportName' => 'Surveys'
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
