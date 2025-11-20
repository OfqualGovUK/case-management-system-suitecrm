<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['OQ_QualificationsDashlet'] = array(
    'module'        => 'OQ_Qualifications',
    'title'         => translate('LBL_HOMEPAGE_TITLE', 'OQ_Qualifications'),
    'description'   => 'A customizable view into OQ_Qualifications',
    'category'      => 'Module Views'
);
