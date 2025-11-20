<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$popupMeta = array(
    'moduleMain' => 'OQ_Qualifications',
    'varName' => 'OQ_Qualifications',
    'className' => 'aCase',
    'orderBy' => 'oq_qualifications.name',
    'whereClauses' =>
    array(
        'name' => 'oq.qualifications.name',
    ),
    'listviewdefs' => [],
    'searchdefs' => ['name']

);
