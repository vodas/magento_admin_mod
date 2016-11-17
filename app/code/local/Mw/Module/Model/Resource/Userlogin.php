<?php

class Mw_Module_Model_Resource_Userlogin extends Mage_Core_Model_Resource_Db_Abstract {
    protected function _construct()
    {
        $this->_init('mw_module/userlogin', 'id');
    }
}