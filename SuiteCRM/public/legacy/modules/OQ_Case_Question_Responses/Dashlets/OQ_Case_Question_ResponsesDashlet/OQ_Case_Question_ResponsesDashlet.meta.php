<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['OQ_Case_Question_ResponsesDashlet'] = array(
    'module'        => 'OQ_Case_Question_Responses',
    'title'         => translate('LBL_HOMEPAGE_TITLE', 'OQ_Case_Question_Responses'),
    'description'   => 'A customizable view into OQ_Case_Question_Responses',
    'category'      => 'Module Views'
);
