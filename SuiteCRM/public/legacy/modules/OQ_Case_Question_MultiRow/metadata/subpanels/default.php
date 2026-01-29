<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}


$module_name = 'OQ_Case_Question_Responses';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
    ),

    'where' => '',

    'list_fields' => array(
        'question_field' => array(
            'vname' => 'LBL_QUESTION_FIELD',
            'widget_class' => 'SubPanelDetailViewLink',
            'link' => true,
            'width' => '40%',
        ),

        'row_number' => array(
            'vname' => 'LBL_ROW_NUMBER',
            'width' => '6%',
        ),

        'date_entered' => array(
            'vname' => 'LBL_LIST_DATE_CREATED',
            'width' => '15%',
        ),
        'assigned_user_name' => array(
            'name' => 'assigned_user_name',
            'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'target_record_key' => 'assigned_user_id',
            'target_module' => 'Employees',
        ),
        'edit_button' => array(
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => 'Cases',
            'width' => '4%',
        ),
        'remove_button' => array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => 'Cases',
            'width' => '5%',
        ),

    ),
);
