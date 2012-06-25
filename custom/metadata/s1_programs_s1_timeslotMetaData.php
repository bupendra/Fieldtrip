<?php
// created: 2012-06-21 16:42:56
$dictionary["s1_programs_s1_timeslot"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    's1_programs_s1_timeslot' => 
    array (
      'lhs_module' => 'S1_Programs',
      'lhs_table' => 's1_programs',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_Timeslot',
      'rhs_table' => 's1_timeslot',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_programs_s1_timeslot_c',
      'join_key_lhs' => 's1_programs_s1_timeslots1_programs_ida',
      'join_key_rhs' => 's1_programs_s1_timeslots1_timeslot_idb',
    ),
  ),
  'table' => 's1_programs_s1_timeslot_c',
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
      'name' => 's1_programs_s1_timeslots1_programs_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_programs_s1_timeslots1_timeslot_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_programs_s1_timeslotspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_programs_s1_timeslot_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_programs_s1_timeslots1_programs_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_programs_s1_timeslot_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_programs_s1_timeslots1_timeslot_idb',
      ),
    ),
  ),
);