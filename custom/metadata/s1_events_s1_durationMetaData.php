<?php
// created: 2012-06-21 16:42:59
$dictionary["s1_events_s1_duration"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    's1_events_s1_duration' => 
    array (
      'lhs_module' => 'S1_Duration',
      'lhs_table' => 's1_duration',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_Events',
      'rhs_table' => 's1_events',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_events_s1_duration_c',
      'join_key_lhs' => 's1_events_s1_durations1_duration_ida',
      'join_key_rhs' => 's1_events_s1_durations1_events_idb',
    ),
  ),
  'table' => 's1_events_s1_duration_c',
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
      'name' => 's1_events_s1_durations1_duration_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_events_s1_durations1_events_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_events_s1_durationspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_events_s1_duration_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_events_s1_durations1_duration_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_events_s1_duration_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_events_s1_durations1_events_idb',
      ),
    ),
  ),
);