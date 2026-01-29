<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$popupMeta = array(
    'moduleMain' => 'OQ_Ofqual_Conditions',
    'varName' => 'OQ_Ofqual_Conditions',
    'className' => 'OQ_Ofqual_Conditions',
    'orderBy' => 'oq_ofqual_conditions.code',
    'whereClauses' =>
    array(
        'name' => 'oq_ofqual_conditions.code',
    ),
    'listviewdefs' => [],
    'searchdefs' => ['code']

);
