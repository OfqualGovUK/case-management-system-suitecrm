<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['OQ_SOC_ConditionsComplianceDashlet'] = array(
    'module'        => 'OQ_SOC_ConditionsCompliance',
    'title'         => translate('LBL_HOMEPAGE_TITLE', 'OQ_SOC_ConditionsCompliance'),
    'description'   => 'A customizable view into OQ_SOC_ConditionsCompliance',
    'category'      => 'Module Views'
);
