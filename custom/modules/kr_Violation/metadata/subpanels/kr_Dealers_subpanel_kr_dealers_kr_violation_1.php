<?php
// created: 2014-03-05 03:37:43
$subpanel_layout['list_fields'] = array (
  'violation_chck' => 
  array (
    'vname' => 'Violation',
    'widget_class' => 'SubPanelViolationCheckBox_kr',
    'width' => '10%',
    'custom_link_only' => true,
    'displayHeaderCell' => false,
    'default' => true,
  ),
  'product_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PRODUCT',
    'id' => 'SM_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'SM_Products',
    'target_record_key' => 'sm_products_id_c',
  ),
  'map_price' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_MAP_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'customer_price' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_CUSTOMER_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'violation_amt_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_VIOLATION_AMT',
    'currency_format' => true,
    'width' => '10%',
  ),
  'webpage_url' => 
  array (
    'type' => 'url',
    'vname' => 'LBL_WEBPAGE_URL',
    'width' => '20%',
    'default' => true,
  ),
  'batch_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_BATCH_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'page_url' => 
  array (
    'type' => 'url',
    'vname' => 'LBL_PAGE_URL',
    'width' => '10%',
    'default' => true,
  ),
  'website_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_WEBSITE',
    'id' => 'KR_WEBSITE_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'kr_website',
    'target_record_key' => 'kr_website_id_c',
  ),
  'seller' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SELLER',
    'width' => '10%',
    'default' => true,
  ),
);