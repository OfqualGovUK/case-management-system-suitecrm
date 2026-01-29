<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$popupMeta = array(
    'moduleMain' => 'OQ_SOC_ConditionsCompliance',
    'varName' => 'OQ_SOC_ConditionsCompliance',
    'className' => 'OQ_SOC_ConditionsCompliance',
    'orderBy' => 'oq_soc_conditionscompliance.name',
    'whereClauses' =>
    array(
        'name' => 'oq_soc_conditionscompliance.name',
    ),
    'listviewdefs' => [],
    'searchdefs' => ['name']

);
