<?php

$dictionary['Case']['fields']['parent_type'] = array(
    'name' => 'parent_type',
    'vname' => 'LBL_PARENT_TYPE',
    'type' => 'parent_type',
    'dbType' => 'varchar',
    'group' => 'parent_name',
    'options' => 'parent_type_display',
    'comment' => 'The SugarCRM module the record is associated with',
);

$dictionary['Case']['fields']['parent_name'] = array(
    'name' => 'parent_name',
    'parent_type'=>'record_type_display',
    'type_name'=>'parent_type',
    'id_name'=>'parent_id',
    'vname' => 'LBL_LIST_RELATED_TO',
    'type' => 'parent',    
    'group' => 'parent_name',
    'source'=>'non-db',
    'options' => 'parent_type_display',
    'comment' => 'The SugarCRM module the record is associated with',
);

$dictionary['Case']['fields']['parent_id'] = array(
    'name' => 'parent_id',
    'vname' => 'LBL_PARENT_ID',
    'type' => 'id',
    'group' => 'parent_name',
    'reportable'=>false,
);


$dictionary['Case']['fields']['submissions'] = array(
    'name' => 'submissions',
    'vname' => 'LBL_SUBMISSIONS',
    'type' => 'link',
    'relationship'=> 'oq_soc_submission_cases',
    'source'=>'non-db'
);
