<?php
// created: 2014-02-25 09:15:36
$dictionary["kr_supplier_activities_1_tasks"] = array (
  'relationships' => 
  array (
    'kr_supplier_activities_1_tasks' => 
    array (
      'lhs_module' => 'kr_supplier',
      'lhs_table' => 'kr_supplier',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'kr_supplier',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);