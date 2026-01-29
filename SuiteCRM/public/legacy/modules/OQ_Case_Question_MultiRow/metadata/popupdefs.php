<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$popupMeta = array(
    'moduleMain' => 'OQ_Case_Question_MultiRow',
    'varName' => 'OQ_Case_Question_MultiRow',
    'className' => 'OQ_Case_Question_MultiRow',
    'orderBy' => 'oq_case_question_multirow.name',
    'whereClauses' =>
    array(
        'name' => 'oq_case_question_multirow.name',
    ),
    'listviewdefs' => [],
    'searchdefs' => ['name']

);
