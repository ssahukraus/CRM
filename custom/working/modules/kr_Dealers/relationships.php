<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$relationships = array (
  'kr_dealers_modified_user' => 
  array (
    'id' => 'e49a96ee-afa8-db82-498c-53075caabc1a',
    'relationship_name' => 'kr_dealers_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'kr_Dealers',
    'rhs_table' => 'kr_dealers',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'kr_dealers_created_by' => 
  array (
    'id' => 'e55bfc47-26af-95ab-107d-53075c9c2536',
    'relationship_name' => 'kr_dealers_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'kr_Dealers',
    'rhs_table' => 'kr_dealers',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'kr_dealers_assigned_user' => 
  array (
    'id' => 'e6180f42-cc42-4265-1571-53075cc708f7',
    'relationship_name' => 'kr_dealers_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'kr_Dealers',
    'rhs_table' => 'kr_dealers',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'kr_dealers_documents_1' => 
  array (
    'id' => 'a25dad6d-018d-0026-e4fb-53075c63cd24',
    'relationship_name' => 'kr_dealers_documents_1',
    'lhs_module' => 'kr_Dealers',
    'lhs_table' => 'kr_dealers',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'join_table' => 'kr_dealers_documents_1_c',
    'join_key_lhs' => 'kr_dealers_documents_1kr_dealers_ida',
    'join_key_rhs' => 'kr_dealers_documents_1documents_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'kr_dealers_activities_1_calls' => 
  array (
    'id' => 'a9e9c1f9-cb66-eecd-97a4-53075cffccdf',
    'relationship_name' => 'kr_dealers_activities_1_calls',
    'lhs_module' => 'kr_Dealers',
    'lhs_table' => 'kr_dealers',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'kr_Dealers',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'kr_dealers_contacts_1' => 
  array (
    'id' => 'ba6a29fe-55c7-3e0d-a4f2-53075c8d50d3',
    'relationship_name' => 'kr_dealers_contacts_1',
    'lhs_module' => 'kr_Dealers',
    'lhs_table' => 'kr_dealers',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'join_table' => 'kr_dealers_contacts_1_c',
    'join_key_lhs' => 'kr_dealers_contacts_1kr_dealers_ida',
    'join_key_rhs' => 'kr_dealers_contacts_1contacts_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'kr_dealers_activities_1_meetings' => 
  array (
    'id' => 'bb479134-c522-cd53-1548-53075c87b9d0',
    'relationship_name' => 'kr_dealers_activities_1_meetings',
    'lhs_module' => 'kr_Dealers',
    'lhs_table' => 'kr_dealers',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'kr_Dealers',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'kr_dealers_kr_website_1' => 
  array (
    'id' => 'c0b9b8f0-2cd1-aa33-498d-53075cf983e0',
    'relationship_name' => 'kr_dealers_kr_website_1',
    'lhs_module' => 'kr_Dealers',
    'lhs_table' => 'kr_dealers',
    'lhs_key' => 'id',
    'rhs_module' => 'kr_website',
    'rhs_table' => 'kr_website',
    'rhs_key' => 'id',
    'join_table' => 'kr_dealers_kr_website_1_c',
    'join_key_lhs' => 'kr_dealers_kr_website_1kr_dealers_ida',
    'join_key_rhs' => 'kr_dealers_kr_website_1kr_website_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'kr_dealers_project_1' => 
  array (
    'id' => 'c33eb191-9161-a522-8fdb-53075c80efb3',
    'relationship_name' => 'kr_dealers_project_1',
    'lhs_module' => 'kr_Dealers',
    'lhs_table' => 'kr_dealers',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'join_table' => 'kr_dealers_project_1_c',
    'join_key_lhs' => 'kr_dealers_project_1kr_dealers_ida',
    'join_key_rhs' => 'kr_dealers_project_1project_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'kr_dealers_cases_1' => 
  array (
    'id' => 'd40880f5-4ff8-a965-5319-53075c9a2eb0',
    'relationship_name' => 'kr_dealers_cases_1',
    'lhs_module' => 'kr_Dealers',
    'lhs_table' => 'kr_dealers',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'join_table' => 'kr_dealers_cases_1_c',
    'join_key_lhs' => 'kr_dealers_cases_1kr_dealers_ida',
    'join_key_rhs' => 'kr_dealers_cases_1cases_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'kr_dealers_activities_1_notes' => 
  array (
    'id' => 'd47e864a-0b19-7f8c-4138-53075cede3b3',
    'relationship_name' => 'kr_dealers_activities_1_notes',
    'lhs_module' => 'kr_Dealers',
    'lhs_table' => 'kr_dealers',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'kr_Dealers',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'kr_dealers_activities_1_tasks' => 
  array (
    'id' => 'd55e7820-b57d-17aa-d695-53075cbfd688',
    'relationship_name' => 'kr_dealers_activities_1_tasks',
    'lhs_module' => 'kr_Dealers',
    'lhs_table' => 'kr_dealers',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'kr_Dealers',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'kr_dealers_kr_violation_1' => 
  array (
    'rhs_label' => 'Violations',
    'lhs_label' => 'Partners',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'kr_Dealers',
    'rhs_module' => 'kr_Violation',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'kr_dealers_kr_violation_1',
  ),
);