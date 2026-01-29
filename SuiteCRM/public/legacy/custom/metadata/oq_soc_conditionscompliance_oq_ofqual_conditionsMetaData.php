<?php
// define the relationship metadata for SOC Conditions Compliance and Ofqual Conditions
// the name of the relationship is oq_soc_conditionscompliance_oq_ofqual_conditions
$dictionary['oq_soc_conditionscompliance_oq_ofqual_conditions'] = array(
    'true_relationship_type' => 'one-to-many', // enforces one-to-many relationship
    'relationships' => array(
        'oq_soc_conditionscompliance_oq_ofqual_conditions' => array(
            'lhs_module' => 'OQ_Ofqual_Conditions', //OQ_Ofqual_Conditions has multiple SOC Conditions Compliance
            'lhs_table' => 'oq_ofqual_conditions',
            'lhs_key' => 'id', //which field to use as key
            'rhs_module' => 'OQ_SOC_ConditionsCompliance', //SOC Conditions Compliance have a single Ofqual Condition
            'rhs_table' => 'oq_soc_conditionscompliance',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many', //a one-to-many is a special case of many-to-many
            'join_table' => 'oq_soc_conditionscompliance_oq_ofqual_conditions_c', //this is the table that stores the relationship
            'join_key_rhs' => 'oq_soc_conditionscompliance_oq_ofqual_conditions_ida', //field in join_table that points to RHS
            'join_key_lhs' => 'oq_ofqual_conditions_idb',
        ),
    ),
    'table' => 'oq_soc_conditionscompliance_oq_ofqual_conditions_c', //the actual table used to store the relationship
    'fields' => array( //the fields that make up the table
        0 => [
            'name' => 'id',
            'type' => 'varchar',
            'len' => 36,
        ],
        1 => [
            'name' => 'date_modified',
            'type' => 'datetime',
        ],
        2 => [
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'default' => '0',
            'required' => true,
        ],
        3 => [
            'name' => 'oq_soc_conditionscompliance_oq_ofqual_conditions_ida',
            'type' => 'varchar',
            'len' => 36,
        ],
        4 => [
            'name' => 'oq_ofqual_conditions_idb',
            'type' => 'varchar',
            'len' => 36,
        ],
    ),
    'indices' => array( //the indices for the table
        0 => array(
            'name' => 'oq_soc_conditionscompliance_oq_ofqual_conditionspk',
            'type' => 'primary',
            'fields' => array(
                0 => 'id',
            ),
        ),
        1 => array(
            'name' => 'oq_soc_conditionscompliance_oq_ofqual_conditions_ida',
            'type' => 'alternate_key',
            'fields' => array(
                0 => 'oq_soc_conditionscompliance_oq_ofqual_conditions_ida',
            ),
        ),
        2 => array(
            'name' => 'oq_ofqual_conditions_idb2',
            'type' => 'index',
            'fields' => array(
                0 => 'oq_ofqual_conditions_idb',
            ),
        ),
    ),
);
