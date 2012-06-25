<?php
// created: 2012-06-21 16:42:59
$dictionary["s1_events_s1_event_cancel_actions"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    's1_events_s1_event_cancel_actions' => 
    array (
      'lhs_module' => 'S1_Events',
      'lhs_table' => 's1_events',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_event_cancel_actions',
      'rhs_table' => 's1_event_cancel_actions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_events_s1_event_cancel_actions_c',
      'join_key_lhs' => 's1_events_s1_event_cancel_actionss1_events_ida',
      'join_key_rhs' => 's1_events_s1_event_cancel_actionss1_event_cancel_actions_idb',
    ),
  ),
  'table' => 's1_events_s1_event_cancel_actions_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 's1_events_s1_event_cancel_actionss1_events_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_events_s1_event_cancel_actionss1_event_cancel_actions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_events_s1_event_cancel_actionsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_events_s1_event_cancel_actions_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_events_s1_event_cancel_actionss1_events_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_events_s1_event_cancel_actions_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_events_s1_event_cancel_actionss1_event_cancel_actions_idb',
      ),
    ),
  ),
);