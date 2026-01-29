<?php
//define the subpanel layout for the Cases module to include Qualifications
$layout_defs['Cases']['subpanel_setup']['oq_cases_tasks'] = array(
    'order' => 100,
    'module' => 'Tasks',
    'subpanel_name' => 'default',
    'title_key' => 'LBL_CASES_FROM_TASKS_TITLE',

    'get_subpanel_data' => 'tasks',
    'sort_order' => 'asc',
    'sort_by' => 'sort_order',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);
