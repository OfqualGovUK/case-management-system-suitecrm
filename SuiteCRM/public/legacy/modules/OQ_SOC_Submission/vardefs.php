<?php
$dictionary['OQ_SOC_Submission'] = array(
    'table' => 'oq_soc_submission',
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
        'soc_referencenumber' =>
        array(
            'name' => 'soc_referencenumber',
            'vname' => 'LBL_SOC_REFERENCE_NUMBER',
            'type' => 'varchar',
            'dbType' => 'varchar',
            'len' => '25',
            'unified_search' => true,
            'full_text_search' =>
            array(
                'enabled' => true,
                'boost' => 3,
            ),

        ),
        'compliance_year' =>
        array(
            'name' => 'compliance_year',
            'vname' => 'LBL_COMPLIANCE_YEAR',
            'type' => 'varchar',
            'len' => 4,
            'merge_filter' => 'selected',
        ),
        'reporting_period' =>
        array(
            'name' => 'reporting_period',
            'vname' => 'LBL_REPORTING_PERIOD',
            'type' => 'varchar',
            'len' => 50,
        ),
        'date_submitted' =>
        array(
            'name' => 'date_submitted',
            'vname' => 'LBL_DATE_SUBMITTED',
            'type' => 'datetime',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'regulators_to_notify_ofqual' =>
        array(
            'name' => 'regulators_to_notify_ofqual',
            'vname' => 'LBL_REGULATORS_TO_NOTIFY_OFQUAL',
            'type' => 'bool',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'regulators_to_notify_ccea' =>
        array(
            'name' => 'regulators_to_notify_ccea',
            'vname' => 'LBL_REGULATORS_TO_NOTIFY_CCEA',
            'type' => 'bool',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'current_compliance_declaration' =>
        array(
            'name' => 'current_compliance_declaration',
            'vname' => 'LBL_CURRENT_COMPLIANCE_DECLARATION',
            'type' => 'bool',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'current_noncompliance_description' =>
        array(
            'name' => 'current_noncompliance_description',
            'vname' => 'LBL_CURRENT_NONCOMPLIANCE_DESCRIPTION',
            'type' => 'text',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'current_noncompliance_specialconditions' =>
        array(
            'name' => 'current_noncompliance_specialconditions',
            'vname' => 'LBL_CURRENT_NONCOMPLIANCE_SPECIALCONDITIONS',
            'type' => 'text',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'current_noncompliance_mitigation' =>
        array(
            'name' => 'current_noncompliance_mitigation',
            'vname' => 'LBL_CURRENT_NONCOMPLIANCE_MITIGATION',
            'type' => 'text',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'current_compliant_date' =>
        array(
            'name' => 'current_compliant_date',
            'vname' => 'LBL_CURRENT_COMPLIANT_DATE',
            'type' => 'datetime',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'future_compliance_declaration' =>
        array(
            'name' => 'future_compliance_declaration',
            'vname' => 'LBL_FUTURE_COMPLIANCE_DECLARATION',
            'type' => 'bool',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'future_noncompliance_description' =>
        array(
            'name' => 'future_noncompliance_description',
            'vname' => 'LBL_FUTURE_NONCOMPLIANCE_DESCRIPTION',
            'type' => 'text',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'future_noncompliance_specialconditions' =>
        array(
            'name' => 'future_noncompliance_specialconditions',
            'vname' => 'LBL_FUTURE_NONCOMPLIANCE_SPECIALCONDITIONS',
            'type' => 'text',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'future_noncompliance_mitigation' =>
        array(
            'name' => 'future_noncompliance_mitigation',
            'vname' => 'LBL_FUTURE_NONCOMPLIANCE_MITIGATION',
            'type' => 'text',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'future_compliant_date' =>
        array(
            'name' => 'future_compliant_date',
            'vname' => 'LBL_FUTURE_COMPLIANT_DATE',
            'type' => 'datetime',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'confirm_accurate' =>
        array(
            'name' => 'confirm_accurate',
            'vname' => 'LBL_CONFIRM_ACCURATE',
            'type' => 'bool',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'confirm_govbody_approval' =>
        array(
            'name' => 'confirm_govbody_approval',
            'vname' => 'LBL_CONFIRM_GOVBODY_APPROVAL',
            'type' => 'bool',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'confirm_chair_ro_approval' =>
        array(
            'name' => 'confirm_chair_ro_approval',
            'vname' => 'LBL_CONFIRM_CHAIR_RO_APPROVAL',
            'type' => 'bool',

            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),

        // ... additional field definitions ...


        'oq_soc_submission_accounts' => array(
            'name' => 'oq_soc_submission_accounts',
            'type' => 'link',
            'relationship' => 'oq_soc_submission_accounts',
            'source' => 'non-db',
            'module' => 'Accounts',
            'bean_name' => 'Account',
            'vname' => 'LBL_OQ_SOC_SUBMISSION_ACCOUNTS_FROM_OQ_SOC_SUBMISSION_TITLE',
            'id_name' => 'oq_soc_submission_accountsoq_soc_submission_ida',
        ),
        'oq_soc_submission_accounts_name' => array(
            'name' => 'oq_soc_submission_accounts_name',
            'rname' => 'name',
            'id_name' => 'oq_soc_submission_accountsoq_soc_submission_ida',
            'vname' => 'LBL_OQ_SOC_SUBMISSION_ACCOUNTS_FROM_OQ_SOC_SUBMISSION_TITLE',
            'type' => 'relate',
            'link' => 'oq_soc_submission_accounts',
            'table' => 'accounts',
            'module' => 'Accounts',
            'source' => 'non-db',
            'save' => true,
        ),
        'oq_soc_submission_accountsoq_soc_submission_ida' => array(
            'name' => 'oq_soc_submission_accountsoq_soc_submission_ida',
            'type' => 'link',
            'relationship' => 'oq_soc_submission_accounts',
            'source' => 'non-db',
            'side' => 'right',
            'reportable' => false,
            'vname' => 'LBL_OQ_SOC_SUBMISSION_ACCOUNTS_FROM_OQ_SOC_SUBMISSION_TITLE_ID',

        ),
        'oq_soc_submission_oq_complianceconditions' =>
        array(
            'name' => 'oq_soc_submission_oq_complianceconditions',
            'vname' => 'LBL_OQ_SOC_SUBMISSIONS_COMPLIANCECONDITIONS_FROM_OQ_SOC_SUBMISSION_TITLE',
            'type' => 'link',
            'relationship' => 'oq_soc_submission_oq_soc_conditionscompliance',
            'module' => 'OQ_SOC_ComplianceConditions',
            'bean_name' => 'OQ_SOC_ComplianceConditions',
            'side' => 'right',
            'source' => 'non-db',
        ),
        'submission_cases' =>
        array(
            'name' => 'submission_cases',
            'vname' => 'LBL_OQ_QUALIFICATIONS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
            'type' => 'link',
            'relationship' => 'oq_soc_submission_cases',
            'module' => 'Cases',
            'bean_name' => 'Case',
            'side' => 'right',
            'source' => 'non-db',
        )

    ),
    'relationships' => array(

        'oq_soc_submission_cases' =>
        array(
            'lhs_module' => 'OQ_SOC_Submission',
            'lhs_table' => 'oq_soc_submission',
            'lhs_key' => 'id',
            'rhs_module' => 'Cases',
            'rhs_table' => 'cases',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'OQ_SOC_Submission',
        ),

    ),
    'optimistic_locking' => true,
    'unified_search' => true,

);
if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}

VardefManager::createVardef('OQ_SOC_Submission', 'OQ_SOC_Submission', array('basic', 'assignable', 'security_groups'));
