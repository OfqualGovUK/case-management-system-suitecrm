<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('OQ_Qualifications', 'edit', true)) {
    $module_menu[] = array("index.php?module=OQ_Qualifications&action=EditView&return_module=OQ_Qualifications&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'], "Add", 'OQ_Qualifications');
}
if (ACLController::checkAccess('OQ_Qualifications', 'list', true)) {
    $module_menu[] = array("index.php?module=OQ_Qualifications&action=index&return_module=OQ_Qualifications&return_action=DetailView", $mod_strings['LNK_LIST'], "View", 'OQ_Qualifications');
}
