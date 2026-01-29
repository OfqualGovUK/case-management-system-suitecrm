<?php
// define the relationship metadata for SOC Submissions and Accounts
// the name of the relationship is oq_soc_submission_accounts
$dictionary['oq_soc_submission_accounts'] = array(
    'true_relationship_type' => 'one-to-many', // enforces one-to-many relationship
    'relationships' => array(
        'oq_soc_submission_accounts' => array(
            'lhs_module' => 'Accounts', //Accounts has multiple SOC Submissions
            'lhs_table' => 'accounts',
            'lhs_key' => 'id', //which field to use as key
            'rhs_module' => 'OQ_SOC_Submission', //SOC Submissions have a single Account
            'rhs_table' => 'oq_soc_submission',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many', //a one-to-many is a special case of many-to-many
            'join_table' => 'oq_soc_submission_accounts_c', //this is the table that stores the relationship
            'join_key_rhs' => 'oq_soc_submission_accountsoq_soc_submission_ida', //field in join_table that points to RHS
            'join_key_lhs' => 'oq_soc_submission_accountsaccounts_idb',
        ),
    ),
    'table' => 'oq_soc_submission_accounts_c', //the actual table used to store the relationship
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
            'name' => 'oq_soc_submission_accountsoq_soc_submission_ida',
            'type' => 'varchar',
            'len' => 36,
        ],
        4 => [
            'name' => 'oq_soc_submission_accountsaccounts_idb',
            'type' => 'varchar',
            'len' => 36,
        ],
    ),
    'indices' => array( //the indices for the table
        0 => array(
            'name' => 'oq_soc_submission_accountsspk',
            'type' => 'primary',
            'fields' => array(
                0 => 'id',
            ),
        ),
        1 => array(
            'name' => 'oq_soc_submission_accounts_ida1',
            'type' => 'alternate_key',
            'fields' => array(
                0 => 'oq_soc_submission_accountsoq_soc_submission_ida',
            ),
        ),
        2 => array(
            'name' => 'oq_soc_submission_accounts_idb2',
            'type' => 'index',
            'fields' => array(
                0 => 'oq_soc_submission_accountsaccounts_idb',
            ),
        ),
    ),
);
