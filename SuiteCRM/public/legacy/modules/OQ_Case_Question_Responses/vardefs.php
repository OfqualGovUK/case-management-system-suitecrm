<?php
$dictionary['OQ_Case_Question_Responses'] = array(
    'table' => 'oq_case_question_responses',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'question_field' =>
        array(
            'name' => 'question_field',
            'vname' => 'LBL_QUESTION_FIELD',
            'type' => 'varchar',
            'len' => 255,
        ),
        'remote_id' =>
        array(
            'name' => 'remote_id',
            'vname' => 'LBL_REMOTE_ID',
            'type' => 'id',
            'required' => true,
            'reportable' => false,
        ),
        'Module' =>
        array(
            'name' => 'Module',
            'vname' => 'LBL_MODULE',
            'type' => 'varchar',
            'len' => 255,
            'required' => true,
            'reportable' => false,
        ),
        'answer' =>
        array(
            'name' => 'answer',
            'vname' => 'LBL_ANSWER',
            'type' => 'text',
        ),
        'answer_datetime' =>
        array(
            'name' => 'answer_datetime',
            'vname' => 'LBL_ANSWER_DATETIME',
            'type' => 'datetime',
        ),
        'answer_bool' =>
        array(
            'name' => 'answer_bool',
            'vname' => 'LBL_ANSWER_BOOL',
            'type' => 'bool',
        ),
        'answer_json' =>
        array(
            'name' => 'answer_json',
            'vname' => 'LBL_ANSWER_JSON',
            'type' => 'longtext',
        ),


    ),
    'indices' => array(
        ['name' => 'oq_case_question_responses_module', 'type' => 'index', 'fields' => ['module', 'remote_id']],
        ['name' => 'idx_oq_case_question_responses_remoteid_mod', 'type' => 'index', 'fields' => ['module', 'remote_id', 'question_field']],
    ),
    'relationships' => array(
        'oq_case_question_responses_cases' => array(
            'lhs_module' => 'Cases',
            'lhs_table' => 'cases',
            'lhs_key' => 'id',
            'rhs_module' => 'OQ_Case_Question_Responses',
            'rhs_table' => 'oq_case_question_responses',
            'rhs_key' => 'remote_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'Module',
            'relationship_role_column_value' => 'Case',
        ),
        'oq_case_question_multirow' => array(
            'lhs_module' => 'OQ_Case_Question_MultiRow',
            'lhs_table' => 'oq_case_question_multirow',
            'lhs_key' => 'id',
            'rhs_module' => 'OQ_Case_Question_Responses',
            'rhs_table' => 'oq_case_question_responses',
            'rhs_key' => 'remote_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'Module',
            'relationship_role_column_value' => 'OQ_Case_Question_MultiRow',
        ),
    ),
    'optimistic_locking' => true,
    'unified_search' => true,

);
if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}

VardefManager::createVardef('OQ_Case_Question_Responses', 'OQ_Case_Question_Responses', array('basic', 'assignable', 'security_groups'));
