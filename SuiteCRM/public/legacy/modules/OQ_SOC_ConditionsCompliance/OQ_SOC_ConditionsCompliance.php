<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class OQ_SOC_ConditionsCompliance extends Basic
{
    public $new_schema = true;
    public $module_dir = 'OQ_SOC_ConditionsCompliance';
    public $object_name = 'OQ_SOC_ConditionsCompliance';
    public $table_name = 'oq_soc_conditionscompliance';
    public $importable = false;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;

    public function bean_implements($interface): bool
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }
        return false;
    }
}
