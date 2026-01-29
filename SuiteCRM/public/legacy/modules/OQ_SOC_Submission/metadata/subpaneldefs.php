<?php
$module = 'OQ_SOC_Submission';
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

$layout_defs[$module]['subpanel_setup']['oq_soc_submissions_cases'] = [
    'top_buttons' => [
        [
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect',
        ],
    ],
    'module' => 'Cases',
    'subpanel_name' => 'default',

    'get_subpanel_data' => 'submission_cases',
    'title_key' => 'LBL_SOC_SUBMISSIONS_CASES_SUBPANEL_TITLE',
    'order' => 100,
    'sort_order' => 'asc',
    'sort_by' => 'name',

];

$layout_defs[$module]['subpanel_setup']['oq_soc_submissions_oq_soc_complianceconditions'] = [
    'top_buttons' => [
        [
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect',
        ],
    ],
    'module' => 'OQ_SOC_ConditionsCompliance',
    'subpanel_name' => 'default',
    'get_subpanel_data' => 'oq_soc_submission_oq_complianceconditions',
    'title_key' => 'LBL_SOC_SUBMISSIONS_CONDITIONSCOMPLIANCE_SUBPANEL_TITLE',
    'order' => 100,
    'sort_order' => 'asc',
    'sort_by' => 'name',

];
