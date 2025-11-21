<?php
$dictionary['OQ_Qualifications'] = array(
    'table' => 'oq_qualifications',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'name' =>
        array(
            'name' => 'name',
            'vname' => 'LBL_NAME',
            'type' => 'name',
            'dbType' => 'varchar',
            'len' => '255',
            'unified_search' => true,
            'full_text_search' =>
            array(
                'enabled' => true,
                'boost' => 3,
            ),
            'required' => true,
            'importable' => 'required',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'number' =>
        array(
            'name' => 'number',
            'vname' => 'LBL_QUALIFICATION_NUMBER',
            'type' => 'varchar',
            'dbType' => 'varchar',
            'len' => '255',
            'unified_search' => true,
            'full_text_search' =>
            array(
                'enabled' => true,
                'boost' => 3,
            ),
            'required' => true,
            'importable' => 'required',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'level' =>
        array(
            'name' => 'level',
            'vname' => 'LBL_QUALIFICATION_LEVEL',
            'type' => 'enum',
            'options' => 'qualification_level_list',
            'len' => 100,
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'sub_level' =>
        array(
            'name' => 'sub_level',
            'vname' => 'LBL_QUALIFICATION_SUB_LEVEL',
            'type' => 'enum',
            'options' => 'qualification_sublevel_list',
            'len' => 100,
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'eqf_level' =>
        array(
            'name' => 'eqf_level',
            'vname' => 'LBL_EQF_LEVEL',
            'type' => 'enum',
            'options' => 'eqf_level_list',
            'len' => 100,
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'type' =>
        array(
            'name' => 'type',
            'vname' => 'LBL_TYPE',
            'type' => 'enum',
            'options' => 'qualification_type_list',
            'len' => 100,
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'total_credits' =>
        array(
            'name' => 'total_credits',
            'vname' => 'LBL_TOTAL_CREDITS',
            'type' => 'int',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'regulation_start_date' =>
        array(
            'name' => 'regulation_start_date',
            'vname' => 'LBL_REGULATION_START_DATE',
            'type' => 'datetime',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'operational_start_date' =>
        array(
            'name' => 'operational_start_date',
            'vname' => 'LBL_OPERATIONAL_START_DATE',
            'type' => 'datetime',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'operational_end_date' =>
        array(
            'name' => 'operational_end_date',
            'vname' => 'LBL_OPERATIONAL_END_DATE',
            'type' => 'datetime',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),

        // ... additional field definitions ...
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,

);
if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}

VardefManager::createVardef('OQ_Qualifications', 'OQ_Qualifications', array('basic', 'assignable', 'security_groups'));
