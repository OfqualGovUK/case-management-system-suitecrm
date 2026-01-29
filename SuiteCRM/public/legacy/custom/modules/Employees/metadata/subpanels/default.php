<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'Employees'),
    ),
    'where' => '',
    'list_fields' => array(
        'full_name' => array(
            'vname' => 'LBL_LIST_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'module' => 'Employees',
            'width' => '20%',
            'sort_by' => 'last_name',
            'sort_order' => 'asc',
        ),

        'email1' => array(
            'vname' => 'LBL_EMAIL_ADDRESS',
            'width' => '25%',
        ),
        'remove_button' => array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => 'Employees',
            'width' => '5%',
        ),
    ),
);
