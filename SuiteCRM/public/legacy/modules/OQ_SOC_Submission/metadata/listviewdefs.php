<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$listViewDefs['OQ_SOC_Submission'] = array(
    'NUMBER' => array(
        'width' => '5',
        'label' => 'LBL_SOC_REFERENCE_NUMBER',
        'default' => true
    ),
    'NAME' => array(
        'width' => '25',
        'label' => 'LBL_NAME',
        'link' => true,
        'default' => true
    ),


);
