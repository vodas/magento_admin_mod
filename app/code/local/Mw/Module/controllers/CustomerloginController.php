<?php

class Mw_Module_CustomerloginController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction() {
        $this->_title($this->__('Customer login&logout'));
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('mw_module/adminhtml_userlogin'));
        $this->renderLayout();
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('mw_module/adminhtml_userlogin_grid')->toHtml()
        );
    }
}