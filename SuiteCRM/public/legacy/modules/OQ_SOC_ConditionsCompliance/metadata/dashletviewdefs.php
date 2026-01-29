<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
global $current_user;

$dashletData['OQ_SOC_ConditionsComplianceDashlet'] = array(
    'searchFields' =>
    array(
        'name' => array('default' => ''),


        'assigned_user_id' => array('default' => $current_user->name, 'type' => 'assigned_user_name'),
    ),
    'columns' =>
    array(

        'NAME' =>
        array(
            'width' => '25',
            'label' => 'LBL_NAME',
            'link' => true,
            'default' => true,
        ),

    ),
);
