<?php

/**
 * This Logic hook loads and saves Ofqual Question responses for a Case or a MultiRow Question.
 * We are flattening the data into virtual fields on the Case/MultiRow module for ease of use and expansion.
 * 
 * For optimal performance we only look for defined virtual fields, and load only those that have been saved.
 * 
 */
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class CaseQuestionsHook
{


    private function getVirtualFields($bean, $onlynotempty = false)
    {
        $virtualFields = [];

        foreach ($bean->field_defs as $fieldName => $fieldDef) {
            if (
                isset($fieldDef['source']) && $fieldDef['source'] === 'non-db'
                && isset($fieldDef['virtual']) && $fieldDef['virtual'] === true
            ) {
                if ($onlynotempty && empty($bean->$fieldName))
                    continue;

                $virtualFields[] = $fieldName;
            }
        }
        return $virtualFields;
    }

    public function saveCaseQuestions($bean, $event, $arguments)
    {
        global $db;

        $userid = $bean->modified_user_id;
        $object_name = $bean->object_name;

        $vfields = $this->getVirtualFields($bean, true);
        $donefields = [];
        $beanmodule = BeanFactory::getBean('OQ_Case_Question_Responses');
        $list = $beanmodule->get_full_list("", "oq_case_question_responses.remote_id='{$bean->id}' AND oq_case_question_responses.Module = '{$object_name}' AND oq_case_question_responses.deleted=0");

        foreach ($list as $item) {
            if (in_array($item->question_field, $vfields)) {
                $field = $item->question_field;
                $type = $bean->field_defs[$field]['type'];
                if (isset($bean->field_defs[$field]['vtype']) && !empty($bean->field_defs[$field]['vtype'])) {
                    $type = $bean->field_defs[$field]['vtype'];
                }

                switch ($type) {
                    case 'bool':
                        $item->answer_bool = $bean->$field;
                        break;
                    case 'json':
                    case 'line-items':
                        if (is_array($bean->$field) || is_object($bean->$field)) {
                            $newitem->answer_json = json_encode($bean->$field);
                        } elseif (is_string($bean->$field)) {
                            $newitem->answer_json = $bean->$field;
                        }
                        break;
                    case 'datetime':
                        $item->answer_datetime = $bean->$field;
                        break;
                    case 'varchar':
                    case 'text':
                    default:
                        $item->answer = $bean->$field;
                        break;
                }
                $donefields[] = $field;
                $item->save();
            }
        }

        // Now handle any new fields that don't yet have a response record

        $notdone = array_diff($vfields, $donefields);
        if (count($notdone) > 0) {
            foreach ($notdone as $field) {
                $type = $bean->field_defs[$field]['type'];
                if (isset($bean->field_defs[$field]['vtype']) && !empty($bean->field_defs[$field]['vtype'])) {
                    $type = $bean->field_defs[$field]['vtype'];
                }
                $newitem = BeanFactory::newBean('OQ_Case_Question_Responses');
                $newitem->remote_id = $bean->id;
                $newitem->module = $object_name;
                $newitem->question_field = $field;
                switch ($type) {
                    case 'bool':
                        $newitem->answer_bool = $bean->$field;
                        break;
                    case 'json':
                    case 'line-items':
                        if (is_array($bean->$field) || is_object($bean->$field)) {
                            $newitem->answer_json = json_encode($bean->$field);
                        } elseif (is_string($bean->$field)) {
                            $newitem->answer_json = $bean->$field;
                        }
                        break;
                    case 'datetime':
                        $newitem->answer_datetime = $bean->$field;
                        break;
                    case 'varchar':
                    case 'text':
                    default:
                        $newitem->answer = $bean->$field;
                        break;
                }
                $newitem->save();
            }
        }
    }

    public function loadCaseQuestions($bean, $event, $arguments)
    {
        global $db;

        $userid = $bean->modified_user_id;
        $object_name = $bean->object_name;

        $vfields = $this->getVirtualFields($bean, false);

        $beanmodule = BeanFactory::getBean('OQ_Case_Question_Responses');
        $list = $beanmodule->get_full_list("", "oq_case_question_responses.remote_id='{$bean->id}' AND oq_case_question_responses.Module = '{$object_name}' AND oq_case_question_responses.deleted=0");

        foreach ($list as $item) {
            if (in_array($item->question_field, $vfields)) {
                $field = $item->question_field;
                $type = $bean->field_defs[$field]['type'];
                if (isset($bean->field_defs[$field]['vtype']) && !empty($bean->field_defs[$field]['vtype'])) {
                    $type = $bean->field_defs[$field]['vtype'];
                }
                switch ($type) {
                    case 'bool':
                        $bean->$field = $item->answer_bool;
                        break;
                    case 'json':
                    case 'line-items':
                        $bean->$field = json_decode(html_entity_decode($item->answer_json ?? ''), true);
                        break;
                    case 'datetime':
                        $bean->$field = $item->answer_datetime;
                        break;
                    case 'varchar':
                    case 'text':
                    default:
                        $bean->$field = $item->answer;
                        break;
                }
            }
        }
    }

    public function deleteQuestions($bean, $event, $arguments)
    {
        global $db;

        $userid = $bean->modified_user_id;
        $object_name = $bean->object_name;

        $beanmodule = BeanFactory::getBean('OQ_Case_Question_Responses');
        $list = $beanmodule->get_full_list("", "remote_id='{$bean->id}' AND Module = '{$object_name}' AND deleted=0");

        foreach ($list as $item) {
            $item->mark_deleted($item->id);
        }
    }
}
