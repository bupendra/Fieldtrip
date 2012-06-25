<?php
// created: 2012-06-21 16:42:56
$dictionary["s1_programs_s1_sites"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    's1_programs_s1_sites' => 
    array (
      'lhs_module' => 'S1_Programs',
      'lhs_table' => 's1_programs',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_Sites',
      'rhs_table' => 's1_sites',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_programs_s1_sites_c',
      'join_key_lhs' => 's1_program0baerograms_ida',
      'join_key_rhs' => 's1_programe72f1_sites_idb',
    ),
  ),
  'table' => 's1_programs_s1_sites_c',
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
      'name' => 's1_program0baerograms_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_programe72f1_sites_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_programs_s1_sitesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_programs_s1_sites_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_program0baerograms_ida',
        1 => 's1_programe72f1_sites_idb',
      ),
    ),
  ),
);