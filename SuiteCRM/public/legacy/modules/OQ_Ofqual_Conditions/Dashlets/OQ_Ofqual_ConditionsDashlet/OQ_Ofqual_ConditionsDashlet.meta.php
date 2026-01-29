<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['OQ_Ofqual_ConditionsDashlet'] = array(
    'module'        => 'OQ_Ofqual_Conditions',
    'title'         => translate('LBL_HOMEPAGE_TITLE', 'OQ_Ofqual_Conditions'),
    'description'   => 'A customizable view into OQ_Ofqual_Conditions',
    'category'      => 'Module Views'
);
