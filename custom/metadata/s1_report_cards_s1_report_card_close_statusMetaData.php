<?php
// created: 2012-06-21 16:42:58
$dictionary["s1_report_cards_s1_report_card_close_status"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    's1_report_cards_s1_report_card_close_status' => 
    array (
      'lhs_module' => 'S1_report_card_close_status',
      'lhs_table' => 's1_report_card_close_status',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_report_cards',
      'rhs_table' => 's1_report_cards',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_report_cards_s1_report_card_close_status_c',
      'join_key_lhs' => 's1_report_afad_status_ida',
      'join_key_rhs' => 's1_report_cards_s1_report_card_close_statuss1_report_cards_idb',
    ),
  ),
  'table' => 's1_report_cards_s1_report_card_close_status_c',
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
      'name' => 's1_report_afad_status_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_report_cards_s1_report_card_close_statuss1_report_cards_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_report_cards_s1_report_card_close_statusspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_report_cards_s1_report_card_close_status_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_report_afad_status_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_report_cards_s1_report_card_close_status_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_report_cards_s1_report_card_close_statuss1_report_cards_idb',
      ),
    ),
  ),
);