<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$listViewDefs['OQ_Case_Question_MultiRow'] = array(

    'NAME' => array(
        'width' => '25',
        'label' => 'LBL_NAME',
        'link' => true,
        'default' => true
    ),
    'CASE_ID' => array(
        'width' => '20',
        'label' => 'LBL_CASE_ID',
        'link' => true,
        'default' => true
    ),
    'QUESTION_FIELD' => array(
        'width' => '10',
        'label' => 'LBL_QUESTION_FIELD',
        'default' => true
    )

);
