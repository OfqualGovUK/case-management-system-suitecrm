<?php
if (!defined('sugarEntry') || !sugarEntry) {
  die('Not A Valid Entry Point');
}

$viewdefs['OQ_Ofqual_Conditions']['QuickCreate'] = array(
  'templateMeta' => array(
    'maxColumns' => '2',
    'widths' => array(
      array('label' => '10', 'field' => '30'),
      array('label' => '10', 'field' => '30')
    ),
  ),
  'panels' =>

  array(

    array(
      array('name' => 'name', 'displayParams' => array('size' => 65, 'required' => true)),
      'number'
    ),


    array(
      'assigned_user_name',
    ),

    array(
      array(
        'name' => 'description',
        'displayParams' => array('rows' => '4', 'cols' => '60'),
        'nl2br' => true,
      ),
    ),

  ),

);
