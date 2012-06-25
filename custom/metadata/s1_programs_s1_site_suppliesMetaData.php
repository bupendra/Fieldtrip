<?php
// created: 2012-06-21 16:42:56
$dictionary["s1_programs_s1_site_supplies"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    's1_programs_s1_site_supplies' => 
    array (
      'lhs_module' => 'S1_Programs',
      'lhs_table' => 's1_programs',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_Site_Supplies',
      'rhs_table' => 's1_site_supplies',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_programsite_supplies_c',
      'join_key_lhs' => 's1_programec2brograms_ida',
      'join_key_rhs' => 's1_program2546upplies_idb',
    ),
  ),
  'table' => 's1_programsite_supplies_c',
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
      'name' => 's1_programec2brograms_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_program2546upplies_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_programs_s1_site_suppliesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_programs_s1_site_supplies_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_programec2brograms_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_programs_s1_site_supplies_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_program2546upplies_idb',
      ),
    ),
  ),
);