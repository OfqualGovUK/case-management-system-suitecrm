<?php

$hook_array['after_retrieve'][] = array(
    1,
    'Pull Fields from extra module',
    'modules/OQ_Case_Question_Responses/SaveQuestions.php',
    'CaseQuestionsHook',
    'loadCaseQuestions'
);

$hook_array['process_record'][] = array(
    1,
    'Pull Fields from extra module',
    'modules/OQ_Case_Question_Responses/SaveQuestions.php',
    'CaseQuestionsHook',
    'loadCaseQuestions'
);

$hook_array['before_save'][] = array(
    1,
    'Push Fields to extra module on Case Save',
    'modules/OQ_Case_Question_Responses/SaveQuestions.php',
    'CaseQuestionsHook',
    'saveCaseQuestions'
);

$hook_array['after_delete'][] = array(
    1,
    'Delete Fields from extra module on Case Delete',
    'modules/OQ_Case_Question_Responses/SaveQuestions.php',
    'CaseQuestionsHook',
    'deleteQuestions'
);
