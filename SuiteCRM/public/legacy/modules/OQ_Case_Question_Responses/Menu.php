<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('OQ_Case_Question_Responses', 'edit', true)) {
    $module_menu[] = array("index.php?module=OQ_Case_Question_Responses&action=EditView&return_module=OQ_Case_Question_Responses&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'], "Add", 'OQ_Case_Question_Responses');
}
if (ACLController::checkAccess('OQ_Case_Question_Responses', 'list', true)) {
    $module_menu[] = array("index.php?module=OQ_Case_Question_Responses&action=index&return_module=OQ_Case_Question_Responses&return_action=DetailView", $mod_strings['LNK_LIST'], "View", 'OQ_Case_Question_Responses');
}
