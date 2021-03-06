<?php
// created: 2012-06-21 16:43:08
$dictionary["s1_sites_s1_events"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    's1_sites_s1_events' => 
    array (
      'lhs_module' => 'S1_Sites',
      'lhs_table' => 's1_sites',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_Events',
      'rhs_table' => 's1_events',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_sites_s1_events_c',
      'join_key_lhs' => 's1_sites_s1_eventss1_sites_ida',
      'join_key_rhs' => 's1_sites_s1_eventss1_events_idb',
    ),
  ),
  'table' => 's1_sites_s1_events_c',
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
      'name' => 's1_sites_s1_eventss1_sites_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_sites_s1_eventss1_events_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_sites_s1_eventsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_sites_s1_events_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_sites_s1_eventss1_sites_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_sites_s1_events_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_sites_s1_eventss1_events_idb',
      ),
    ),
  ),
);