<?php
$dictionary['OQ_SOC_ConditionsCompliance'] = array(
    'table' => 'oq_soc_conditionscompliance',
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
        'period' =>
        array(
            'name' => 'period',
            'vname' => 'LBL_PERIOD',
            'type' => 'varchar',
            'dbType' => 'varchar',
            'len' => '25',
            'unified_search' => true,


        ),
        'compliant' =>
        array(
            'name' => 'compliant',
            'vname' => 'LBL_COMPLIANT',
            'type' => 'bool',

        ),


        // ... additional field definitions ...


        'oq_soc_conditionscompliance_oq_ofqual_conditions' => array(
            'name' => 'oq_soc_conditionscompliance_oq_ofqual_conditions',
            'type' => 'link',
            'relationship' => 'oq_soc_conditionscompliance_oq_ofqual_conditions',
            'source' => 'non-db',
            'module' => 'OQ_Ofqual_Conditions',
            'bean_name' => 'OQ_Ofqual_Conditions',
            'vname' => 'LBL_OQ_SOC_CONDITIONSCOMPLIANCE_OFQUAL_CONDITIONS_TITLE',
            'id_name' => 'oq_soc_conditionscompliance_oq_ofqual_conditions_ida',
        ),
        'oq_soc_conditionscompliance_oq_ofqual_conditions_name' => array(
            'name' => 'oq_soc_conditionscompliance_oq_ofqual_conditions_name',
            'rname' => 'name',
            'id_name' => 'oq_soc_conditionscompliance_oq_ofqual_conditions_ida',
            'vname' => 'LBL_OQ_SOC_CONDITIONSCOMPLIANCE_OFQUAL_CONDITIONS_TITLE',
            'type' => 'relate',
            'link' => 'oq_soc_conditionscompliance_oq_ofqual_conditions',
            'table' => 'oq_ofqual_conditions',
            'module' => 'OQ_Ofqual_Conditions',
            'source' => 'non-db',
            'save' => true,
        ),

        'oq_soc_conditionscompliance_oq_ofqual_conditions_ida' => array(
            'name' => 'oq_soc_conditionscompliance_oq_ofqual_conditions_ida',
            'type' => 'link',
            'relationship' => 'oq_soc_conditionscompliance_oq_ofqual_conditions',
            'source' => 'non-db',
            'side' => 'right',
            'reportable' => false,
            'vname' => 'LBL_OQ_SOC_CONDITIONSCOMPLIANCE_OFQUAL_CONDITIONS_TITLE_ID',

        ),

        'oq_soc_conditionscompliance_oq_soc_submission' => array(
            'name' => 'oq_soc_conditionscompliance_oq_soc_submission',
            'type' => 'link',
            'relationship' => 'oq_soc_submission_oq_soc_conditionscompliance',
            'source' => 'non-db',
            'module' => 'OQ_SOC_Submission',
            'bean_name' => 'OQ_SOC_Submission',
            'vname' => 'LBL_OQ_SOC_CONDITIONSCOMPLIANCE_OQ_SOC_SUBMISSION_TITLE',
            'id_name' => 'oq_soc_conditionscompliance_idb',
        ),
        'oq_soc_conditionscompliance_oq_soc_submission_name' => array(
            'name' => 'oq_soc_conditionscompliance_oq_soc_submission_name',
            'rname' => 'name',
            'id_name' => 'oq_soc_conditionscompliance_idb',
            'vname' => 'LBL_OQ_SOC_CONDITIONSCOMPLIANCE_OQ_SOC_SUBMISSION_TITLE',
            'type' => 'relate',
            'link' => 'oq_soc_conditionscompliance_oq_soc_submission',
            'table' => 'oq_soc_submission',
            'module' => 'OQ_SOC_Submission',
            'source' => 'non-db',
            'save' => true,
        ),
        'oq_soc_conditionscompliance_idb' => array(
            'name' => 'oq_soc_conditionscompliance_idb',
            'type' => 'link',
            'relationship' => 'oq_soc_submission_oq_soc_conditionscompliance',
            'source' => 'non-db',
            'side' => 'right',
            'reportable' => false,
            'vname' => 'LBL_OQ_SOC_CONDITIONSCOMPLIANCE_OQ_SOC_SUBMISSION_TITLE_ID',

        ),
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,

);
if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}

VardefManager::createVardef('OQ_SOC_ConditionsCompliance', 'OQ_SOC_ConditionsCompliance', array('basic', 'assignable', 'security_groups'));
