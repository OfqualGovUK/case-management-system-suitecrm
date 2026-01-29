<?php
if (!defined('sugarEntry') || !sugarEntry) {
  die('Not A Valid Entry Point');
}

$viewdefs['OQ_SOC_ConditionsCompliance'] =
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
          ['name', 'period'],
          ['compliant'],
          ['oq_soc_conditionscompliance_oq_soc_submission_name', 'oq_soc_conditionscompliance_oq_ofqual_conditions_name'],
          ['assigned_user_name',],
          ['date_entered', 'date_modified'],

        ),
      ),
    ),

  );
