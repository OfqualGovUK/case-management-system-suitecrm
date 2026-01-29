<?php
$module = 'OQ_Case_Question_MultiRow';
$layout_defs[$module]['subpanel_setup']['securitygroups'] = [
    'top_buttons' => [
        [
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect',
            'popup_module' => 'SecurityGroups',
        ],
    ],
    'module' => 'SecurityGroups',
    'subpanel_name' => 'default',
    'get_subpanel_data' => 'SecurityGroups',
    'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
    'order' => 900,
    'sort_order' => 'asc',
    'sort_by' => 'name',
    'refresh_page' => 1,
    'add_subpanel_data' => 'securitygroup_id',
];
$layout_defs[$module]['subpanel_setup']['fieldentries'] = [
    'top_buttons' => [
        [
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect',
            'popup_module' => 'SecurityGroups',
        ],
    ],
    'module' => 'OQ_Case_Question_Responses',
    'subpanel_name' => 'default',
    'get_subpanel_data' => 'question_multirow_responses',
    'title_key' => 'LBL_FIELDENTRIES_SUBPANEL_TITLE',
    'order' => 900,
    'sort_order' => 'asc',
    'sort_by' => 'name',
    'refresh_page' => 1,

];
