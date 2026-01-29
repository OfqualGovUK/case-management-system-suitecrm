<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('OQ_SOC_ConditionsCompliance', 'edit', true)) {
    $module_menu[] = array("index.php?module=OQ_SOC_ConditionsCompliance&action=EditView&return_module=OQ_SOC_ConditionsCompliance&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'], "Add", 'OQ_SOC_ConditionsCompliance');
}
if (ACLController::checkAccess('OQ_SOC_ConditionsCompliance', 'list', true)) {
    $module_menu[] = array("index.php?module=OQ_SOC_ConditionsCompliance&action=index&return_module=OQ_SOC_ConditionsCompliance&return_action=DetailView", $mod_strings['LNK_LIST'], "View", 'OQ_SOC_ConditionsCompliance');
}
