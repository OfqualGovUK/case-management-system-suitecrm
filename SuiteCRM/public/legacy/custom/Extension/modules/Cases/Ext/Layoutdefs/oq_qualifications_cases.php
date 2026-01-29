<?php
//define the subpanel layout for the Cases module to include Qualifications
$layout_defs['Cases']['subpanel_setup']['oq_qualifications_cases'] = array(
    'order' => 100,
    'module' => 'OQ_Qualifications',
    'subpanel_name' => 'default',
    'title_key' => 'LBL_OQ_QUALIFICATIONS_CASES_FROM_OQ_QUALIFICATIONS_TITLE',
    'get_subpanel_data' => 'oq_qualifications_cases',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);

$layout_defs['Cases']['subpanel_setup']['oq_question_responses_case'] = array(
    'order' => 100,
    'module' => 'OQ_Case_Question_Responses',
    'subpanel_name' => 'default',
    'title_key' => 'LBL_OQ_QUESTION_RESPONSES_CASES_FROM_OQ_QUESTION_RESPONSES_TITLE',
    'get_subpanel_data' => 'question_responses',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);

$layout_defs['Cases']['subpanel_setup']['oq_question_multirow_case'] = array(
    'order' => 100,
    'module' => 'OQ_Case_Question_MultiRow',
    'subpanel_name' => 'default',
    'title_key' => 'LBL_OQ_QUESTION_MULTIROW_CASES_FROM_OQ_QUESTION_MULTIROW_TITLE',
    'get_subpanel_data' => 'question_multirow_responses',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);
