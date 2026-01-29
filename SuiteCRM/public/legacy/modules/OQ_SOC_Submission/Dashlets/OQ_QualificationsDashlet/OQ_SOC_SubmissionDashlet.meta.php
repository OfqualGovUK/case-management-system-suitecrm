<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['OQ_SOC_SubmissionDashlet'] = array(
    'module'        => 'OQ_SOC_Submission',
    'title'         => translate('LBL_HOMEPAGE_TITLE', 'OQ_SOC_Submission'),
    'description'   => 'A customizable view into OQ_SOC_Submission',
    'category'      => 'Module Views'
);
