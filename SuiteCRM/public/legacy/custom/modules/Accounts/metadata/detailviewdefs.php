<?php


$viewdefs['Accounts'] =
  array(
    'DetailView' =>
    array(
      'templateMeta' =>
      array(
        'form' =>
        array(
          'buttons' =>
          array(
            'SEND_CONFIRM_OPT_IN_EMAIL' => EmailAddress::getSendConfirmOptInEmailActionLinkDefs('Accounts'),
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
            'AOS_GENLET' =>
            array(
              'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
            ),
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
        'includes' =>
        array(
          0 =>
          array(
            'file' => 'modules/Accounts/Account.js',
          ),
        ),
        'useTabs' => true,
        'tabDefs' =>
        array(
          'LBL_ACCOUNT_INFORMATION' =>
          array(
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ADVANCED' =>
          array(
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ASSIGNMENT' =>
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
              'endLabelKey' => 'LBL_AVERAGE_CLOSED_WON_PER_YEAR',
              'type' => 'accounts-won-opportunity-amount-by-year',
              'hideValueIfEmpty' => true
            ],
            [
              'endLabelKey' => 'LBL_OPPORTUNITIES_TOTAL',
              'type' => 'opportunities',
              'hideValueIfEmpty' => true
            ],

          ],
        ],
        'acls' => [
          'Accounts' => ['view', 'list'],
          'Opportunities' => ['view', 'list']
        ]
      ],
      'sidebarWidgets' => [
        [
          'type' => 'chart',
          'options' => [
            'toggle' => false,
            'headerTitle' => true,
            'charts' => [
              [
                'chartKey' => 'accounts-past-years-closed-opportunity-amounts',
                'chartType' => 'line-chart',
                'statisticsType' => 'accounts-past-years-closed-opportunity-amounts',
                'labelKey' => 'LBL_CLOSED_PER_YEAR',
                'chartOptions' => []
              ]
            ]
          ],
          'acls' => [
            'Accounts' => ['view', 'list'],
            'Opportunities' => ['view', 'list']
          ]
        ],
        [
          'type' => 'history-timeline',
          'acls' => [
            'Accounts' => ['view', 'list']
          ]
        ],
      ],
      'recordActions' => [
        'actions' => [
          'print-as-pdf' => [
            'key' => 'print-as-pdf',
            'labelKey' => 'LBL_PRINT_AS_PDF',
            'asyncProcess' => true,
            'modes' => ['detail'],
            'acl' => ['view'],
            'aclModule' => 'AOS_PDF_Templates',
            'params' => [
              'selectModal' => [
                'module' => 'AOS_PDF_Templates'
              ]
            ]
          ]
        ]
      ],
      'panels' => array(
        'lbl_account_information' =>
        array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'name',
              'comment' => 'Name of the Company',
              'label' => 'LBL_NAME',
            ),
            1 =>
            array(
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
          ),
          1 =>
          array(
            0 =>
            array(
              'name' => 'website',
              'type' => 'link',
              'label' => 'LBL_WEBSITE',
              'displayParams' =>
              array(
                'link_target' => '_blank',
              ),
            ),
            1 =>
            array(
              'name' => 'phone_office',
              'comment' => 'The office phone number',
              'label' => 'LBL_PHONE_OFFICE',
            ),
          ),
          2 =>
          array(
            0 =>
            array(
              'name' => 'email1',
              'studio' => 'false',
              'label' => 'LBL_EMAIL',
            ),
            1 => '',
          ),
          3 =>
          array(
            0 =>
            array(
              'name' => 'billing_address_street',
              'label' => 'LBL_BILLING_ADDRESS',
              'type' => 'address',
              'displayParams' =>
              array(
                'key' => 'billing',
              ),
            ),
            1 =>
            array(
              'name' => 'shipping_address_street',
              'label' => 'LBL_SHIPPING_ADDRESS',
              'type' => 'address',
              'displayParams' =>
              array(
                'key' => 'shipping',
              ),
            ),
          ),
          4 =>
          array(
            0 =>
            array(
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
            1 => ''
          ),
          5 => ['recognition_number', 'legal_name'],
          6 => ['acronym', 'organisation_number'],
          7 => ['organisation_number_type', 'has_company_number'],
          8 => ['company_number', 'has_charity_number'],
          9 => ['charity_number', 'is_other_uk_legal_entity'],
          10 => ['other_uk_legal_entity_type', 'is_registered_in_other_country'],
          11 => ['other_country_of_registration', 'other_country_identifier'],
          12 => ['is_individual_or_partnership', 'date_of_incorporation'],
          13 => ['ofqual_recognised_on', 'ofqual_withdrawn_on'],
          14 => ['ofqual_surrendered_on', 'ofqual_organisation_status'],
          15 => ['ccea_recognised_on', 'ccea_withdrawn_on'],
          16 => ['ccea_surrendered_on', 'ccea_organisation_status'],
          17 => ['qualification_submitter', 'created_by_recognition_gateway'],
          18 => ['fees_url'],
          19 => ['headoffice_address_line1', 'headoffice_address_line2'],
          20 => ['headoffice_address_line3', 'headoffice_address_line4'],
          21 => ['headoffice_address_country', 'headoffice_address_postcode'],
          22 => ['headoffice_address_phonenumber'],
        ),
        'LBL_PANEL_ADVANCED' =>
        array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'account_type',
              'comment' => 'The Company is of this type',
              'label' => 'LBL_TYPE',
            ),
            1 =>
            array(
              'name' => 'industry',
              'comment' => 'The company belongs in this industry',
              'label' => 'LBL_INDUSTRY',
            ),
          ),
          1 =>
          array(
            0 =>
            array(
              'name' => 'annual_revenue',
              'comment' => 'Annual revenue for this company',
              'label' => 'LBL_ANNUAL_REVENUE',
            ),
            1 =>
            array(
              'name' => 'employees',
              'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
              'label' => 'LBL_EMPLOYEES',
            ),
          ),
          2 =>
          array(
            0 =>
            array(
              'name' => 'parent_name',
              'label' => 'LBL_MEMBER_OF',
            ),
            1 => '',
          ),
          3 =>
          array(
            0 => 'campaign_name',
            1 => '',
          ),
        ),
        'LBL_PANEL_ASSIGNMENT' =>
        array(
          0 =>
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
        )
      ),
    ),
  );
