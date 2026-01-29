<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('OQ_Ofqual_Conditions', 'edit', true)) {
    $module_menu[] = array("index.php?module=OQ_Ofqual_Conditions&action=EditView&return_module=OQ_Ofqual_Conditions&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'], "Add", 'OQ_Ofqual_Conditions');
}
if (ACLController::checkAccess('OQ_Ofqual_Conditions', 'list', true)) {
    $module_menu[] = array("index.php?module=OQ_Ofqual_Conditions&action=index&return_module=OQ_Ofqual_Conditions&return_action=DetailView", $mod_strings['LNK_LIST'], "View", 'OQ_Ofqual_Conditions');
}
