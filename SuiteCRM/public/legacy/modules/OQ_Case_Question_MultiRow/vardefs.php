<?php
$dictionary['OQ_Case_Question_MultiRow'] = array(
    'table' => 'oq_case_question_multirow',
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
        'case_id' =>
        array(
            'name' => 'case_id',
            'vname' => 'LBL_CASE_ID',
            'type' => 'id',
            'required' => true,
            'reportable' => false,
        ),
        'row_num' =>
        array(
            'name' => 'row_num',
            'vname' => 'LBL_ROW',
            'type' => 'int',
            'required' => true,
            'reportable' => false,
            'readonly' => true,
        ),

        'question_multirow_responses' =>
        array(
            'name' => 'question_multirow_responses',
            'vname' => 'LBL_QUESTION_MULTIROW_RESPONSES',
            'type' => 'link',
            'relationship' => 'oq_case_question_multirow',
            'source' => 'non-db',
        ),

        'cwm_case_id' =>
        array(
            'name' => 'cwm_case_id',
            'vname' => 'LBL_CWM_CASE_ID',
            'type' => 'varchar',
            'len' => 36,
            'virtual' => true,
            'source' => 'non-db',

        ),
        'cwm_case_rationale' =>
        array(
            'name' => 'cwm_case_rationale',
            'vname' => 'LBL_CWM_CASE_RATIONALE',
            'type' => 'text',
            'virtual' => true,
            'source' => 'non-db',
        ),

    ),
    'indices' => array(
        ['name' => 'oq_case_multirow_idx', 'type' => 'index', 'fields' => ['case_id', 'question_field']],
    ),
    'relationships' => array(
        'oq_case_question_multirow_cases' => array(
            'lhs_module' => 'Cases',
            'lhs_table' => 'cases',
            'lhs_key' => 'id',
            'rhs_module' => 'OQ_Case_Question_MultiRow',
            'rhs_table' => 'oq_case_question_multirow',
            'rhs_key' => 'case_id',
            'relationship_type' => 'one-to-many',
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

VardefManager::createVardef('OQ_Case_Question_MultiRow', 'OQ_Case_Question_MultiRow', array('basic', 'assignable', 'security_groups'));
