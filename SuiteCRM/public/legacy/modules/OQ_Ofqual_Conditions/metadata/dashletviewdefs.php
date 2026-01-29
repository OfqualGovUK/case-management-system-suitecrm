<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
global $current_user;

$dashletData['OQ_Ofqual_ConditionsDashlet'] = array(
    'searchFields' =>
    array(
        'name' => array('default' => ''),
        'code' => array('default' => ''),
        'condition_type' => array('default' => ''),
        'assigned_user_id' => array('default' => $current_user->name, 'type' => 'assigned_user_name'),
    ),
    'columns' =>
    array(
        'CODE' =>
        array(
            'width' => '5',
            'label' => 'LBL_CODE',
            'default' => true,
        ),

    ),
);
