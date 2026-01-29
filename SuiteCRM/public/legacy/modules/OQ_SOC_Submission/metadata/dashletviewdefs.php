<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
global $current_user;

$dashletData['OQ_SOC_SubmissionDashlet'] = array(
    'searchFields' =>
    array(
        'name' => array('default' => ''),
        'number' => array('default' => ''),

        'assigned_user_id' => array('default' => $current_user->name, 'type' => 'assigned_user_name'),
    ),
    'columns' =>
    array(
        'NUMBER' =>
        array(
            'width' => '5',
            'label' => 'LBL_SOC_REFERENCE_NUMBER',
            'default' => true,
        ),
        'NAME' =>
        array(
            'width' => '25',
            'label' => 'LBL_NAME',
            'link' => true,
            'default' => true,
        ),

    ),
);
