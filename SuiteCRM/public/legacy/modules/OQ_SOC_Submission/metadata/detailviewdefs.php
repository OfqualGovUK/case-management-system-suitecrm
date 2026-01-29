<?php
if (!defined('sugarEntry') || !sugarEntry) {
  die('Not A Valid Entry Point');
}

$viewdefs['OQ_SOC_Submission'] =
  array(
    'DetailView' =>
    array(
      'templateMeta' =>
      array(
        'form' =>
        array(
          'buttons' =>
          array(
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
          ),
        ),
        'maxColumns' => '2',
        'widths' =>
        array(
          0 =>
          array(
            'label' => '10',
            'field' => '30',
          ),
          1 =>
          array(
            'label' => '10',
            'field' => '30',
          ),
        ),
        'useTabs' => false,
        'tabDefs' =>
        array(
          'DEFAULT' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
      ),

      'sidebarWidgets' => [],
      'panels' =>
      array(
        'default' =>
        array(
          ['name', 'soc_reference_number'],
          ['current_compliant_date', 'compliance_year'],
          ['reporting_period', 'date_submitted'],
          ['regulators_to_notify_ofqual', 'regulators_to_notify_ccea'],
          ['current_compliance_declaration', 'current_noncompliance_description'],
          ['current_noncompliance_specialconditions', 'current_noncompliance_mitigation'],
          ['future_compliant_date', 'future_compliance_declaration'],
          ['future_noncompliance_description', 'future_noncompliance_specialconditions'],
          ['future_noncompliance_mitigation', ''],
          ['confirm_accurate', 'confirm_govbody_approval'],
          ['confirm_chair_ro_approval', ''],
          ['assigned_user_name', 'oq_soc_submission_accounts_name'],
          ['date_entered', 'date_modified'],

        ),
      ),
    ),

  );
