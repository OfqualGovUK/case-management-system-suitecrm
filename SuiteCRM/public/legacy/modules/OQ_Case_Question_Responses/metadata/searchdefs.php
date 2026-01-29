<?php

if (!defined('sugarEntry') || !sugarEntry) {
  die('Not A Valid Entry Point');
}

$searchdefs['OQ_Case_Question_Responses'] =
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
        'case_id' =>
        array(
          'name' => 'case_id',
          'default' => true,
          'width' => '10%',
        ),
        'name' =>
        array(
          'name' => 'name',
          'default' => true,
          'width' => '10%',
        ),
        'question_field' =>
        array(

          'label' => 'LBL_QUESTION_FIELD',
          'width' => '10%',
          'default' => true,
          'name' => 'question_field',
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
