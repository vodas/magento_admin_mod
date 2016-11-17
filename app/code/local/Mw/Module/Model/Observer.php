<?php
class Mw_Module_Model_Observer {

    public $isModuleEnabled;

    public function __construct()
    {
        if($this->isModuleEnabled == null) {
            $this->isModuleEnabled = Mage::getStoreConfig('customconfig_options/section_one/mw_module_status', Mage::app()->getStore()->getStoreId());
        }
    }

    public function userLogin(Varien_Event_Observer $observer)
    {

        if($this->isModuleEnabled == 1) {
            $event = $observer->getEvent();
            $customer = $event->getCustomer();
            $write_connection = Mage::getSingleton('core/resource')->getConnection('core_write');
            $fields_arr = array(
                'username' => $customer->getEmail(),
                'action' => 'login',
                'user_id' => $customer->getId(),
                'date' => date("Y-m-d H:i:s")
            );
            $prefix = Mage::getConfig()->getTablePrefix();
            if ($prefix[0] != null) {
                $write_connection->insert($prefix[0] . 'mw_userlogin', $fields_arr);
            } else {
                $write_connection->insert('mw_userlogin', $fields_arr);
            }
        }
    }


    public function userLogout(Varien_Event_Observer $observer)
    {
        if ($this->isModuleEnabled == 1) {
            $event = $observer->getEvent();
            $customer = $event->getCustomer();
            $write_connection = Mage::getSingleton('core/resource')->getConnection('core_write');
            $fields_arr = array(
                'username' => $customer->getEmail(),
                'action' => 'logout',
                'user_id' => $customer->getId(),
                'date' => date("Y-m-d H:i:s")
            );
            $prefix = Mage::getConfig()->getTablePrefix();
            if ($prefix[0] != null) {
                $write_connection->insert($prefix[0] . 'mw_userlogin', $fields_arr);
            } else {
                $write_connection->insert('mw_userlogin', $fields_arr);
            }
        }
    }
}