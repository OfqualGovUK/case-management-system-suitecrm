<?php


$viewdefs['Cases'] =
    array(
        'DetailView' =>
        array(
            'templateMeta' =>
            array(
                'form' =>
                array(
                    'buttons' =>
                    array(
                        0 => 'EDIT',
                        1 => 'DUPLICATE',
                        2 => 'DELETE',
                        3 => 'FIND_DUPLICATES',
                    ),
                ),
                'maxColumns' => '2',
                'widths' =>
                array(
                    0 =>
                    array(
                        'label' => '10',
                        'field' => '30',
                    ),
                    1 =>
                    array(
                        'label' => '10',
                        'field' => '30',
                    ),
                ),
                'useTabs' => true,
                'tabDefs' =>
                array(
                    'LBL_CASE_INFORMATION' =>
                    array(
                        'newTab' => true,
                        'panelDefault' => 'expanded',
                    ),
                ),
            ),
            'topWidget' => [
                'type' => 'statistics',
                'options' => [
                    'statistics' => [
                        [
                            'labelKey' => '',
                            'type' => 'case-days-open',
                            'endLabelKey' => 'LBL_STAT_DAYS',
                            'hideValueIfEmpty' => true
                        ],
                        [
                            'labelKey' => 'LBL_TOTAL_CASES_FOR_THIS_ACCOUNT',
                            'type' => 'cases-per-account',
                            'endLabelKey' => 'LBL_SINCE',
                            'hideValueIfEmpty' => true
                        ],
                    ],
                ]
            ],
            'sidebarWidgets' => [
                [
                    'type' => 'record-thread',
                    'labelKey' => 'LBL_CASE_UPDATES',
                    'options' => [
                        'recordThread' => [
                            'module' => 'case-updates',
                            'class' => 'case-updates',
                            'filters' => [
                                'parentFilters' => [
                                    'id' => 'case_id'
                                ],
                                'orderBy' => 'date_entered',
                                'sortOrder' => 'DESC'
                            ],
                            'item' => [
                                'itemClass' => 'case-updates-item pt-2 pb-2',
                                'collapsible' => true,
                                'dynamicClass' => ['source', 'internal'],
                                'layout' => [
                                    'header' => ['rows' => []],
                                    'body' => [
                                        'rows' => [
                                            [
                                                'align' => 'end',
                                                'justify' => 'between',
                                                'cols' => [
                                                    [
                                                        'field' => 'author',
                                                        'labelDisplay' => 'none',
                                                        'hideIfEmpty' => true,
                                                        'class' => 'font-weight-bold item-title'
                                                    ],
                                                    [
                                                        'field' => 'internal',
                                                        'labelDisplay' => 'inline',
                                                        'labelClass' => 'm-0',
                                                        'display' => 'none',
                                                        'hideIfEmpty' => true,
                                                        'class' => 'small ml-auto font-weight-light'
                                                    ],
                                                ]
                                            ],
                                            [
                                                'align' => 'start',
                                                'justify' => 'start',
                                                'class' => 'flex-grow-1 item-content',
                                                'cols' => [
                                                    [
                                                        'field' => [
                                                            'name' => 'description',
                                                            'type' => 'html',
                                                        ],
                                                        'labelDisplay' => 'none',
                                                    ]
                                                ]
                                            ],
                                            [
                                                'justify' => 'left',
                                                'class' => 'flex-grow-1 item-content-extra',
                                                'cols' => [
                                                    [
                                                        'field' => [
                                                            'name' => 'notes',
                                                            'type' => 'line-items',
                                                            'lineItems' => [
                                                                'labelOnFirstLine' => true,
                                                                'definition' => [
                                                                    'name' => 'notes_fields',
                                                                    'vname' => 'LBL_FILENAME',
                                                                    'type' => 'composite',
                                                                    'layout' => ['filename'],
                                                                    'display' => 'inline',
                                                                    'attributeFields' => [
                                                                        'filename' => [
                                                                            'name' => 'filename',
                                                                            'type' => 'file',
                                                                            'vname' => 'LBL_FILENAME',
                                                                            'labelKey' => 'LBL_FILENAME',
                                                                            'required' => true,
                                                                            'valueParent' => 'record',
                                                                            'showLabel' => ['*'],
                                                                        ],
                                                                    ],
                                                                ]
                                                            ],
                                                        ],
                                                        'labelDisplay' => 'none',
                                                        'hideIfEmpty' => false,
                                                        'class' => 'small ml-auto font-weight-light',
                                                    ],
                                                ],
                                            ],
                                            [
                                                'justify' => 'end',
                                                'class' => 'flex-grow-1',
                                                'cols' => [
                                                    [
                                                        'field' => 'date_entered',
                                                        'labelDisplay' => 'none',
                                                        'hideIfEmpty' => true,
                                                        'class' => 'small ml-auto font-weight-light'
                                                    ],
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                            ],
                            'create' => [
                                'presetFields' => [
                                    'parentValues' => [
                                        'id' => 'case_id'
                                    ],
                                ],
                                'layout' => [
                                    'header' => ['rows' => []],
                                    'body' => [
                                        'rows' => [
                                            [
                                                'justify' => 'start',
                                                'class' => 'flex-grow-1',
                                                'cols' => [
                                                    [
                                                        'field' => [
                                                            'name' => 'description',
                                                            'metadata' => [
                                                                'rows' => 3
                                                            ]
                                                        ],
                                                        'labelDisplay' => 'top',
                                                        'class' => 'flex-grow-1',
                                                    ]
                                                ]
                                            ],
                                            [
                                                'align' => 'end',
                                                'justify' => 'start',
                                                'class' => 'flex-grow-1',
                                                'cols' => [
                                                    [
                                                        'field' => 'internal',
                                                        'labelDisplay' => 'inline',
                                                    ],
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                            ]
                        ]
                    ],
                    'acls' => [
                        'Cases' => ['view', 'list']
                    ]
                ],
            ],
            'panels' =>
            array(
                'lbl_case_information' =>
                array(
                    0 =>
                    array(
                        0 =>
                        array(
                            'name' => 'case_number',
                            'label' => 'LBL_CASE_NUMBER',
                        ),
                        1 => 'priority',
                    ),
                    1 =>
                    array(
                        0 =>
                        array(
                            'name' => 'state',
                            'comment' => 'The state of the case (i.e. open/closed)',
                            'label' => 'LBL_STATE',
                        ),
                        1 => 'status',
                    ),
                    2 =>
                    array(
                        0 => 'type',
                        1 => 'account_name',
                    ),
                    3 =>
                    array(
                        0 =>
                        array(
                            'name' => 'name',
                            'label' => 'LBL_SUBJECT',
                        ),
                        1 => 'parent_name'
                    ),
                    4 =>
                    array(
                        0 => 'description',
                    ),
                    5 =>
                    array(
                        0 => 'resolution',
                    ),
                    6 =>
                    array(
                        0 =>
                        array(
                            'name' => 'assigned_user_name',
                            'label' => 'LBL_ASSIGNED_TO',
                        ),
                        1 => ''
                    ),
                    7 =>
                    array(
                        0 =>
                        array(
                            'name' => 'date_entered',
                            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                        ),
                        1 =>
                        array(
                            'name' => 'date_modified',
                            'label' => 'LBL_DATE_MODIFIED',
                            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                        ),
                    ),
                ),
            ),
        ),
    );
