<?php
$viewdefs ['SM_Quotes'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'product_sku_c',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT_SKU',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'product_qty_c',
            'label' => 'LBL_PRODUCT_QTY',
          ),
        ),
      ),
    ),
  ),
);
?>
