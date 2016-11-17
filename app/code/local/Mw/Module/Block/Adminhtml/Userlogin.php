<?php

class Mw_Module_Block_Adminhtml_Userlogin extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'mw_module';
        $this->_controller = 'adminhtml_userlogin';
        $this->_headerText = Mage::helper('mw_module')->__('Customer login&logout');
        parent::__construct();
        $this->_removeButton('add');
    }
}