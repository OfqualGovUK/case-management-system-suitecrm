<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('OQ_SOC_Submission', 'edit', true)) {
    $module_menu[] = array("index.php?module=OQ_SOC_Submission&action=EditView&return_module=OQ_SOC_Submission&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'], "Add", 'OQ_SOC_Submission');
}
if (ACLController::checkAccess('OQ_SOC_Submission', 'list', true)) {
    $module_menu[] = array("index.php?module=OQ_SOC_Submission&action=index&return_module=OQ_SOC_Submission&return_action=DetailView", $mod_strings['LNK_LIST'], "View", 'OQ_SOC_Submission');
}
