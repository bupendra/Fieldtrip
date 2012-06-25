<?php
// created: 2012-06-21 16:42:55
$dictionary["s1_report_card_questions_s1_report_cards"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    's1_report_card_questions_s1_report_cards' => 
    array (
      'lhs_module' => 'S1_report_card_questions',
      'lhs_table' => 's1_report_card_questions',
      'lhs_key' => 'id',
      'rhs_module' => 'S1_report_cards',
      'rhs_table' => 's1_report_cards',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_report_creport_cards_c',
      'join_key_lhs' => 's1_report_76c9estions_ida',
      'join_key_rhs' => 's1_report_0f26t_cards_idb',
    ),
  ),
  'table' => 's1_report_creport_cards_c',
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
      'name' => 's1_report_76c9estions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_report_0f26t_cards_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_report_card_questions_s1_report_cardsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_report_card_questions_s1_report_cards_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_report_76c9estions_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_report_card_questions_s1_report_cards_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_report_0f26t_cards_idb',
      ),
    ),
  ),
);