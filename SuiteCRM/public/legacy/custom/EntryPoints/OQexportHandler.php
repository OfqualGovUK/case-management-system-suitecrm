<?php

/**
 * This entry point accepts a data array (json/base64 encoded) and a name,
 * The data array contains module names and ID's that it then exports in JSON format 
 * aiming to import them into a foreign/remote system.
 * 
 * The associated importer is a Suite8 CLI script that can import any record for any module.
 */

namespace SuiteCRM;

use BeanFactory;

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $sugar_config;

$data = $_REQUEST['moduleData'] ?? null;
$name = $_REQUEST['exportName'] ?? 'Export';
$exportdata = [];
$blockedfields = [
    'modified_user_id',
    'created_by',
    'created_by_name',
    'modified_by_name',
    'assigned_user_id',
    "created_by_link",
    "modified_user_link",
    "assigned_user_id",
    "assigned_user_name",
    "assigned_user_link"
];
if ($data) {
    $data = json_decode(base64_decode($data), true);
    if ($data) {
        foreach ($data as $moduleName => $ids) {
            $exportdata[$moduleName] = [];
            $masterbean = BeanFactory::getBean($moduleName);
            $fieldslist = $masterbean->column_fields;
            foreach ($ids as $id) {
                $beanfac = BeanFactory::getBean($moduleName);
                $bean = $beanfac->retrieve($id, true, false);
                if ($bean !== false) {
                    $exportdata[$moduleName][$id] = [];
                    foreach ($fieldslist as $field) {
                        if ($field === 'date_modified') {
                            // Capture the modified time as a timestamp so we can use during import to spot duplicates, out of date files.
                            $dateobj = $GLOBALS['timedate']->fromUser($bean->date_modified);
                            $mod_timestamp = $dateobj->getTimestamp();
                            $exportdata[$moduleName][$id]['_OQModifiedTime'] = $mod_timestamp;
                        }
                        if (!in_array($field, $blockedfields)) {
                            $exportdata[$moduleName][$id][$field] = $bean->$field;
                        }
                    }
                }
            }
        }
        @ob_clean();
        $encoded = json_encode($exportdata);
        header('Content-Type: application/json');
        header('Content-Disposition: attachment; filename="' . $name . '_' . time() . '_export.json"');
        header('Content-Length: ' . strlen($encoded));
        header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
        header('Pragma: no-cache'); // HTTP 1.0.
        header('Expires: 0'); // Proxies.
        echo $encoded;
        exit;
    }
}
