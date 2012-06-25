<?php
// created: 2012-06-21 16:43:08
$dictionary["s1_sites_s1_tier_members"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    's1_sites_s1_tier_members' => 
    array (
      'lhs_module' => 'S1_Tier_Members',
      'lhs_table' => 's1_tier_members',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_Sites',
      'rhs_table' => 's1_sites',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_sites_s1tier_members_c',
      'join_key_lhs' => 's1_sites_s390dmembers_ida',
      'join_key_rhs' => 's1_sites_s8d551_sites_idb',
    ),
  ),
  'table' => 's1_sites_s1tier_members_c',
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
      'name' => 's1_sites_s390dmembers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_sites_s8d551_sites_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_sites_s1_tier_membersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_sites_s1_tier_members_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_sites_s390dmembers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_sites_s1_tier_members_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_sites_s8d551_sites_idb',
      ),
    ),
  ),
);