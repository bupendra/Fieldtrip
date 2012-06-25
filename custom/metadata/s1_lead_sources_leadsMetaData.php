<?php
// created: 2012-06-21 16:43:06
$dictionary["s1_lead_sources_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    's1_lead_sources_leads' => 
    array (
      'lhs_module' => 'S1_lead_sources',
      'lhs_table' => 's1_lead_sources',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 's1_lead_sources_leads_c',
      'join_key_lhs' => 's1_lead_sources_leadss1_lead_sources_ida',
      'join_key_rhs' => 's1_lead_sources_leadsleads_idb',
    ),
  ),
  'table' => 's1_lead_sources_leads_c',
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
      'name' => 's1_lead_sources_leadss1_lead_sources_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 's1_lead_sources_leadsleads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 's1_lead_sources_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 's1_lead_sources_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 's1_lead_sources_leadss1_lead_sources_ida',
      ),
    ),
    2 => 
    array (
      'name' => 's1_lead_sources_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 's1_lead_sources_leadsleads_idb',
      ),
    ),
  ),
);