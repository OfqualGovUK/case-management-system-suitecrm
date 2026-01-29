<?php
if (!defined('sugarEntry') || !sugarEntry) {
  die('Not A Valid Entry Point');
}

$searchFields['OQ_Case_Question_MultiRow'] = array(
  'name' => array('query_type' => 'default'),
  'case_id' => array('query_type' => 'default'),
  'question_field' => array('query_type' => 'default'),
  'answer' => array('query_type' => 'default'),

  'assigned_user_id' =>  array('query_type' => 'default'),

  'range_date_entered' =>
  array(
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' =>
  array(
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' =>
  array(
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' =>
  array(
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' =>
  array(
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' =>
  array(
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
);
