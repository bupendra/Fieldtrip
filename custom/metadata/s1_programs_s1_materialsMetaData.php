<?php
// created: 2012-06-21 16:42:56
$dictionary["s1_programs_s1_materials"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    's1_programs_s1_materials' => 
    array (
      'lhs_module' => 'S1_Programs',
      'lhs_table' => 's1_programs',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_Materials',
      'rhs_table' => 's1_materials',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_programs_s1_materials_c',
      'join_key_lhs' => 's1_programs_s1_materialss1_programs_ida',
      'join_key_rhs' => 's1_programs_s1_materialss1_materials_idb',
    ),
  ),
  'table' => 's1_programs_s1_materials_c',
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
      'name' => 's1_programs_s1_materialss1_programs_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_programs_s1_materialss1_materials_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_programs_s1_materialsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_programs_s1_materials_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_programs_s1_materialss1_programs_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_programs_s1_materials_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_programs_s1_materialss1_materials_idb',
      ),
    ),
  ),
);