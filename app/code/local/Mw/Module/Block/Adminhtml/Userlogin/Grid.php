<?php
class Mw_Module_Block_Adminhtml_Userlogin_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('mw_module_grid');
        $this->setDefaultDir('DESC');
        $this->setUseAjax(true);
    }

    protected function _prepareCollection()
    {
        $this->_collection = Mage::getModel('mw_module/userlogin')->getCollection();
        parent::_prepareCollection();
        return $this;
    }

    protected function _prepareColumns()
    {
        $helper = Mage::helper('mw_module');

        $this->addColumn('id', array(
            'header' => $helper->__('ID'),
            'index'  => 'id'
        ));

        $this->addColumn('user_id', array(
            'header' => $helper->__('USER ID'),
            'index'  => 'user_id'
        ));


        $this->addColumn('username', array(
            'header' => $helper->__('Username'),
            'index'  => 'username'
        ));


        $this->addColumn('date', array(
            'header' => $helper->__('Date'),
            'index'  => 'date',
            'type' => 'datetime'
        ));

        $this->addColumn('action', array(
            'header' => $helper->__('action'),
            'index'  => 'action'
        ));


        return parent::_prepareColumns();
    }

    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', array('_current'=>true));
    }
}