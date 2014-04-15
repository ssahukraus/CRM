<?php
// created: 2009-04-09 14:57:12
$dictionary["sm_physinventory_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sm_physinventory_contacts' => 
    array (
      'lhs_module' => 'SM_PhysInventory',
      'lhs_table' => 'sm_physinventory',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sm_physinveory_contacts_c',
      'join_key_lhs' => 'sm_physinv9330ventory_ida',
      'join_key_rhs' => 'sm_physinvb179ontacts_idb',
    ),
  ),
  'table' => 'sm_physinveory_contacts_c',
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
      'name' => 'sm_physinv9330ventory_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sm_physinvb179ontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sm_physinventory_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sm_physinventory_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sm_physinv9330ventory_ida',
        1 => 'sm_physinvb179ontacts_idb',
      ),
    ),
  ),
);
?>
