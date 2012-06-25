<?php
// created: 2012-06-21 16:43:02
$dictionary["s1_chains_s1_chains"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    's1_chains_s1_chains' => 
    array (
      'lhs_module' => 'S1_Chains',
      'lhs_table' => 's1_chains',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_Chains',
      'rhs_table' => 's1_chains',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_chains_s1_chains_c',
      'join_key_lhs' => 's1_chains_s1_chainss1_chains_ida',
      'join_key_rhs' => 's1_chains_s1_chainss1_chains_idb',
    ),
  ),
  'table' => 's1_chains_s1_chains_c',
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
      'name' => 's1_chains_s1_chainss1_chains_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_chains_s1_chainss1_chains_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_chains_s1_chainsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_chains_s1_chains_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_chains_s1_chainss1_chains_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_chains_s1_chains_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_chains_s1_chainss1_chains_idb',
      ),
    ),
  ),
);