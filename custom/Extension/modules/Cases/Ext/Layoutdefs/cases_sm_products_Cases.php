<?php
 // created: 2011-11-30 19:51:29
$layout_defs["Cases"]["subpanel_setup"]['cases_sm_products'] = array (
  'order' => 100,
  'module' => 'SM_Products',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CASES_SM_PRODUCTS_FROM_SM_PRODUCTS_TITLE',
  'get_subpanel_data' => 'cases_sm_products',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
