<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$popupMeta = array(
    'moduleMain' => 'OQ_Case_Question_Responses',
    'varName' => 'OQ_Case_Question_Responses',
    'className' => 'OQ_Case_Question_Responses',
    'orderBy' => 'oq_case_question_responses.name',
    'whereClauses' =>
    array(
        'name' => 'oq_case_question_responses.name',
    ),
    'listviewdefs' => [],
    'searchdefs' => ['name']

);
