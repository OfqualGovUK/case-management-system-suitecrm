<?php
//define the subpanel layout for the Accounts module to include SOC Submissions
$layout_defs['Accounts']['subpanel_setup']['oq_soc_submissions_accounts'] = array(
    'order' => 100,
    'module' => 'OQ_SOC_Submission',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_OQ_SOC_SUBMISSIONS_ACCOUNTS_FROM_OQ_SOC_SUBMISSIONS_TITLE',
    'get_subpanel_data' => 'oq_soc_submission_accounts',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);
