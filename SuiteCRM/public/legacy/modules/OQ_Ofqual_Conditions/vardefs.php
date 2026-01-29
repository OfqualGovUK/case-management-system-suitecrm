<?php
$dictionary['OQ_Ofqual_Conditions'] = array(
    'table' => 'oq_ofqual_conditions',
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
        'code' =>
        array(
            'name' => 'code',
            'vname' => 'LBL_CODE',
            'type' => 'varchar',
            'dbType' => 'varchar',
            'len' => '255',

        ),
        'condition_type' =>
        array(
            'name' => 'condition_type',
            'vname' => 'LBL_CONDITION_TYPE',
            'type' => 'varchar',
            'len' => 50,

        ),
        'condition_category' =>
        array(
            'name' => 'condition_category',
            'vname' => 'LBL_CONDITION_CATEGORY',
            'type' => 'varchar',
            'len' => 150,

        ),
        'subcondition_flag' =>
        array(
            'name' => 'subcondition_flag',
            'vname' => 'LBL_SUBCONDITION_FLAG',
            'type' => 'bool',

        ),
        'sort_order' =>
        array(
            'name' => 'sort_order',
            'vname' => 'LBL_SORT_ORDER',
            'type' => 'int',
            'len' => 20,

        ),
        'oq_soc_conditionscompliance_oq_ofqual_conditions' =>
        array(
            'name' => 'oq_soc_conditionscompliance_oq_ofqual_conditions',
            'vname' => 'LBL_OQ_SOC_CONDITIONSCOMPLIANCE_OQ_OFQUAL_CONDITIONS_TITLE',
            'type' => 'link',
            'relationship' => 'oq_soc_conditionscompliance_oq_ofqual_conditions',
            'module' => 'OQ_SOC_ConditionsCompliance',
            'bean_name' => 'OQ_SOC_ConditionsCompliance',
            'side' => 'right',
            'source' => 'non-db',
        )
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,

);
if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}

VardefManager::createVardef('OQ_Ofqual_Conditions', 'OQ_Ofqual_Conditions', array('basic', 'assignable', 'security_groups'));
