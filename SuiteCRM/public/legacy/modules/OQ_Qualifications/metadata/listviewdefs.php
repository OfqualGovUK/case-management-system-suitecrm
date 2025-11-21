<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$listViewDefs['OQ_Qualifications'] = array(
    'NUMBER' => array(
        'width' => '5',
        'label' => 'LBL_QUALIFICATION_NUMBER',
        'default' => true
    ),
    'NAME' => array(
        'width' => '25',
        'label' => 'LBL_NAME',
        'link' => true,
        'default' => true
    ),
    'TYPE' => array(
        'width' => '20',
        'label' => 'LBL_TYPE',
        'default' => true
    ),
    'OPERATIONAL_START_DATE' => array(
        'width' => '10',
        'label' => 'LBL_OPERATIONAL_START_DATE',
        'default' => true
    ),
    'OPERATIONAL_END_DATE' => array(
        'width' => '10',
        'label' => 'LBL_OPERATIONAL_END_DATE',
        'default' => true
    ),

);
