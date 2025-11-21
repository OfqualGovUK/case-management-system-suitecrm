<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$viewdefs ['OQ_Qualifications'] =
array(
  'EditView' =>
  array(
    'templateMeta' =>
    array(
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
      'useTabs' => true,
      'tabDefs' =>
      array(
        'DEFAULT' =>
        array(
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      )
    ),
    'panels' =>
    array(
      'default' =>
      array(      
        ['name', 'number' ],
        ['level', 'sub_level' ],
        ['eqf_level','type'],
        ['total_credits', 'regulation_start_date'],
        ['operational_start_date', 'operational_end_date' ],
        [ 'assigned_user_name' ],
        ['date_entered', 'date_modified' ],        
         
        
      ),
    ),
  ),
);
