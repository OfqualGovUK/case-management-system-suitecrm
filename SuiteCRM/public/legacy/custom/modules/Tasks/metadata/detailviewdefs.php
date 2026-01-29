<?php


$viewdefs['Tasks'] =
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
            3 =>
            array(
              'customCode' => '{if $fields.status.value != "Completed"} <input type="hidden" name="isSaveAndNew" value="false">  <input type="hidden" name="status" value="">  <input id="close_and_create_new_button" title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  class="button"  onclick="this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.isDuplicate.value=true; this.form.return_id.value=\'{$fields.id.value}\';"  name="button"  value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  type="submit">{/if}',
              'sugar_html' =>
              array(
                'type' => 'submit',
                'value' => '{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}',
                'htmlOptions' =>
                array(
                  'title' => '{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}',
                  'class' => 'button',
                  'onclick' => 'this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.isDuplicate.value=true; this.form.return_id.value=\'{$fields.id.value}\';',
                  'name' => 'button',
                  'id' => 'close_and_create_new_button',
                ),
                'template' => '{if $fields.status.value != "Completed"}[CONTENT]{/if}',
              ),
            ),
            4 =>
            array(
              'customCode' => '{if $fields.status.value != "Completed"} <input type="hidden" name="isSave" value="false">  <input title="{$APP.LBL_CLOSE_BUTTON_TITLE}" id="close_button" class="button"  onclick="this.form.status.value=\'Completed\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Tasks\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'"  name="button1"  value="{$APP.LBL_CLOSE_BUTTON_TITLE}"  type="submit">{/if}',
              'sugar_html' =>
              array(
                'type' => 'submit',
                'value' => '{$APP.LBL_CLOSE_BUTTON_TITLE}',
                'htmlOptions' =>
                array(
                  'title' => '{$APP.LBL_CLOSE_BUTTON_TITLE}',
                  'class' => 'button',
                  'onclick' => 'this.form.status.value=\'Completed\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Tasks\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'',
                  'name' => 'button1',
                  'id' => 'close_button',
                ),
                'template' => '{if $fields.status.value != "Completed"}[CONTENT]{/if}'
              ),
            ),
          ),
          'hidden' =>
          array(
            0 => '<input type="hidden" name="isSaveAndNew">',
            1 => '<input type="hidden" name="status" value="">',
            2 => '<input type="hidden" name="isSave">',
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
          'LBL_TASK_INFORMATION' =>
          array(
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_CASE' =>
          array(
            'newTab' => true,
            'panelDefault' => 'expanded',
            'display' => 'hide',
            'displayLogic' => [
              'key' => 'displayType',
              'modes' => ['view', 'edit', 'create'],
              'params' => [
                'fieldDependencies' => [
                  'parent_type'
                ],
                'targetDisplayType' => 'show',
                'activeOnFields' => [
                  'parent_type' => [
                    'Cases'
                  ]
                ]
              ]
            ]
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
              'labelKey' => 'LBL_DAYS_UNTIL_DUE_TASK',
              'type' => 'days-until-due-task',
              'endLabelKey' => 'LBL_STAT_DAYS',
              'hideValueIfEmpty' => true
            ],
          ],
        ]
      ],
      'panels' =>
      array(
        'lbl_task_information' =>
        array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'name',
              'label' => 'LBL_SUBJECT',
            ),
            1 => 'status',
          ),
          1 =>
          array(
            0 => 'date_start',
            1 =>
            array(
              'name' => 'parent_name',
              'metadata' => [
                'dynamicFieldLabel' => 'LBL_RELATED_TO_DYNAMIC',
                'emptyFieldLabel' => 'LBL_RELATED_TO',
              ]
            ),
          ),
          2 =>
          array(
            0 => 'date_due',
            1 =>
            array(
              'name' => 'contact_name',
              'label' => 'LBL_CONTACT',
            ),
          ),
          3 =>
          array(
            0 => 'priority',
            1 => ''
          ),
          4 =>
          array(
            0 => 'description',
            1 => ''
          ),
        ),
        'LBL_PANEL_CASE' => [
          ['phase', 'sort_order'],
          ['drupal_formid'],

        ],
        'LBL_PANEL_ASSIGNMENT' =>
        array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
            1 => ''
          ),
          1 =>
          array(
            0 =>
            array(
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
              'label' => 'LBL_DATE_ENTERED',
            ),
            1 =>
            array(
              'name' => 'date_modified',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
              'label' => 'LBL_DATE_MODIFIED',
            ),
          ),
        ),
      ),
    ),
  );
