<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$viewdefs['AOW_WorkFlow'] = [
  'ListView' => [
    'bulkActions' => [
      'actions' => [
        'export-workflows' => [
          'key' => 'export-workflows',
          'labelKey' => 'LBL_EXPORT_WORKFLOWS',
          'modes' => ['list'],
          'acl' => ['export'],
          'params' => [
            'min' => 1,
            'allowAll' => true
          ]
        ]
      ]

    ],

  ]

];

$listViewDefs['AOW_WorkFlow'] =
  array(
    'NAME' =>
    array(
      'width' => '15%',
      'label' => 'LBL_NAME',
      'default' => true,
      'link' => true,
    ),
    'FLOW_MODULE' =>
    array(
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'label' => 'LBL_FLOW_MODULE',
      'width' => '15%',
    ),
    'STATUS' =>
    array(
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'label' => 'LBL_STATUS',
      'width' => '15%',
    ),
    'ASSIGNED_USER_NAME' =>
    array(
      'width' => '15%',
      'label' => 'LBL_ASSIGNED_TO_NAME',
      'module' => 'Employees',
      'id' => 'ASSIGNED_USER_ID',
      'default' => true,
    ),
    'DATE_ENTERED' =>
    array(
      'type' => 'datetime',
      'label' => 'LBL_DATE_ENTERED',
      'width' => '15%',
      'default' => true,
    ),
    'DATE_MODIFIED' =>
    array(
      'type' => 'datetime',
      'label' => 'LBL_DATE_MODIFIED',
      'width' => '10%',
      'default' => true,
    ),
  );
