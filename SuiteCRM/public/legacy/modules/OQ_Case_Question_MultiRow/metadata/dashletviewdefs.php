<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
global $current_user;

$dashletData['OQ_Case_Question_MultiRowDashlet'] = array(
    'searchFields' =>
    array(
        'name' => array('default' => ''),
        'case_id' => array('default' => ''),
        'question_field' => array('default' => ''),
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
        'CASE_ID' =>
        array(
            'width' => '20',
            'label' => 'LBL_CASE_ID',
            'default' => true,
        ),
        'QUESTION_FIELD' =>
        array(
            'width' => '20',
            'label' => 'LBL_QUESTION_FIELD',
            'default' => true,
        ),

    ),
);
