<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
require_once('include/generic/SugarWidgets/SugarWidgetField.php');

class SugarWidgetSubPanelImagenewField_kr extends SugarWidgetField {//look at name of class {

    function displayHeaderCell(&$layout_def) {
        if (!empty($layout_def['displayHeaderCell']) && $layout_def['displayHeaderCell'] == false) {
            return '&nbsp;';
        } else {
            return parent::displayHeaderCell($layout_def);
        }
    }

    function displayList(&$layout_def) {
        global $focus;
        global $sugar_config;
      
        if (isset($layout_def['varname'])) {
            $key = strtoupper($layout_def['varname']);
        } else {
            $key = $this->_get_column_alias($layout_def);
            $key = strtoupper($key);
        }

        /*
         * to retrive the image name and creata templates for the same 
         */
        $db = DBManagerFactory::getInstance();
        $id = $layout_def['fields']['ID'];
        $query = "SELECT * FROM kr_rma_detail_cstm WHERE id_c = '$id'";
        $result = $db->query($query, true);
        $resultImage = $db->fetchByAssoc($result);
        $imageName = $resultImage['image_c'];

        $imgArr = explode(',', $imageName);

        $quantity = "";
        foreach ($imgArr as $imgName) {
            $imgName = $sugar_config['kr_img_url'].$imgName.$sugar_config['kr_img_cred'];
            //$quantity .="<img width='100' height='100' src='http://fileshare.kraususa.com/$imgName?login=rgauser:rgaICG2014'/>";
            $quantity .="<img width='100' height='100' src='$imgName'/>";
        }

        return $quantity; // sending the template for images in subpanel
    }
}