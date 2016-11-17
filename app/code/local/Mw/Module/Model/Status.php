<?php
class Mw_Module_Model_Status
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => '1',
                'label' => 'enabled',
            ),
            array(
                'value' => '0',
                'label' => 'disabled',
            )
        );
    }
}