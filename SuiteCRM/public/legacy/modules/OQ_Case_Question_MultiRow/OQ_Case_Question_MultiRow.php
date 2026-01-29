<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class OQ_Case_Question_MultiRow extends Basic
{
    public $new_schema = true;
    public $module_dir = 'OQ_Case_Question_MultiRow';
    public $object_name = 'OQ_Case_Question_MultiRow';
    public $table_name = 'oq_case_question_multirow';
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

    public function save($check_notify = false)
    {
        global $db;
        if (empty($this->row_num)) {
            $sql = "Select Max(row_num) as maxrow from oq_case_question_multirow where case_id = '{$this->case_id}' 
                AND question_field = '{$this->question_field}' AND deleted=0";
            $result = $db->query($sql);
            $row = $db->fetchByAssoc($result);
            if ($row !== null && isset($row['maxrow'])) {
                $this->row_num = $row['maxrow'] + 1;
            } else {
                $this->row_num = 1;
            }
        }

        return parent::save($check_notify);
    }
}
