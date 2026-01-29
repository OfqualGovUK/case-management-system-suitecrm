<?php
if (!defined('sugarEntry') || !sugarEntry) {
  die('Not A Valid Entry Point');
}

$viewdefs['OQ_Case_Question_Responses'] =
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
        'useTabs' => false,
        'tabDefs' =>
        array(
          'DEFAULT' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
      ),

      'sidebarWidgets' => [],
      'panels' =>
      array(
        'default' =>
        array(
          ['name', 'question_field'],
          ['answer', 'answer_datetime'],
          ['answer_bool', 'answer_json'],
          ['date_entered', 'date_modified'],

        ),
      ),
    ),

  );
