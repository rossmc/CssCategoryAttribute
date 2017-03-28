<?php
class Rossmc_CssCategoryAttribute_Model_Observer
{

    public function addMenuAttributes(Varien_Event_Observer $observer)
    {
        $observer->getSelect()->columns(
            array('css_classes')
        );
    }
}