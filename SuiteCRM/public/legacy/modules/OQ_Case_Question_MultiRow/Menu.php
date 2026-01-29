<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('OQ_Case_Question_MultiRow', 'edit', true)) {
    $module_menu[] = array("index.php?module=OQ_Case_Question_MultiRow&action=EditView&return_module=OQ_Case_Question_MultiRow&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'], "Add", 'OQ_Case_Question_MultiRow');
}
if (ACLController::checkAccess('OQ_Case_Question_MultiRow', 'list', true)) {
    $module_menu[] = array("index.php?module=OQ_Case_Question_MultiRow&action=index&return_module=OQ_Case_Question_MultiRow&return_action=DetailView", $mod_strings['LNK_LIST'], "View", 'OQ_Case_Question_MultiRow');
}
