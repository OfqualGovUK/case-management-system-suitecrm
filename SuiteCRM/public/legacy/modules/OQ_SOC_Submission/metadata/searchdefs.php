<?php

if (!defined('sugarEntry') || !sugarEntry) {
  die('Not A Valid Entry Point');
}

$searchdefs['OQ_SOC_Submission'] =
  array(
    'layout' =>
    array(
      'basic_search' =>
      array(
        0 => 'name',
        1 =>
        array(
          'name' => 'current_user_only',
          'label' => 'LBL_CURRENT_USER_FILTER',
          'type' => 'bool',
        ),
        2 => array('name' => 'favorites_only', 'label' => 'LBL_FAVORITES_FILTER', 'type' => 'bool',),
      ),
      'advanced_search' =>
      array(
        'soc_referencenumber' =>
        array(
          'name' => 'number',
          'default' => true,
          'width' => '10%',
        ),
        'name' =>
        array(
          'name' => 'name',
          'default' => true,
          'width' => '10%',
        ),


        'assigned_user_id' =>
        array(
          'name' => 'assigned_user_id',
          'type' => 'enum',
          'label' => 'LBL_ASSIGNED_TO',
          'function' =>
          array(
            'name' => 'get_user_array',
            'params' =>
            array(
              0 => false,
            ),
          ),
          'default' => true,
          'width' => '10%',
        ),

      ),
    ),
    'templateMeta' =>
    array(
      'maxColumns' => '3',
      'maxColumnsBasic' => '4',
      'widths' =>
      array(
        'label' => '10',
        'field' => '30',
      ),
    ),
  );
