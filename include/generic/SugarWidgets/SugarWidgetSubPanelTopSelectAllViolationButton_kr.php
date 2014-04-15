<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
/* * *******************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
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
 * ****************************************************************************** */

class SugarWidgetSubPanelTopSelectAllViolationButton_kr extends SugarWidgetSubPanelTopButton {

    var $form_value = '';

    public function getWidgetId() {
        global $app_strings;
        $this->form_value = "SELECT ALL"; //$app_strings['LBL_COMPOSE_EMAIL_BUTTON_LABEL'];
        return parent::getWidgetId();
    }

    function display($defines) {

        global $app_strings, $current_user, $sugar_config, $beanList, $beanFiles;
        $title = "SELECT ALL"; //$app_strings['LBL_COMPOSE_EMAIL_BUTTON_TITLE'];
        //$accesskey = $app_strings['LBL_COMPOSE_EMAIL_BUTTON_KEY'];
        $value = "Select All"; //$app_strings['LBL_COMPOSE_EMAIL_BUTTON_LABEL'];
        $parent_type = $defines['focus']->module_dir;
        $parent_id = $defines['focus']->id;
        $button = "<label for='" . preg_replace('[ ]', '', $value) . "_chkbox'>$value</label> <input id='select_all' onclick='custom_validation(this);' class='button' type='checkbox' name='" . preg_replace('[ ]', '', $value) . "_chkbox' style='float: none; width: 12px;  margin: 0px 8px 0px 2px;'  />";

        return $button;
    }

}