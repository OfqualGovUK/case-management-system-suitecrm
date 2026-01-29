<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$popupMeta = array(
    'moduleMain' => 'OQ_SOC_Submission',
    'varName' => 'OQ_SOC_Submission',
    'className' => 'OQ_SOC_Submission',
    'orderBy' => 'oq_soc_submission.name',
    'whereClauses' =>
    array(
        'name' => 'oq_soc_submission.name',
    ),
    'listviewdefs' => [],
    'searchdefs' => ['name']

);
