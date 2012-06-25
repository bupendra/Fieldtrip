<?php
// created: 2012-06-21 16:42:55
$dictionary["s1_reservations_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    's1_reservations_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_Reservations',
      'rhs_table' => 's1_reservations',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_reservations_contacts_c',
      'join_key_lhs' => 's1_reservations_contactscontacts_ida',
      'join_key_rhs' => 's1_reservations_contactss1_reservations_idb',
    ),
  ),
  'table' => 's1_reservations_contacts_c',
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
      'name' => 's1_reservations_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_reservations_contactss1_reservations_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_reservations_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_reservations_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_reservations_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_reservations_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_reservations_contactss1_reservations_idb',
      ),
    ),
  ),
);