<?php

class Osworlds_Quickview_Model_System_Config_Source_ListEffects {
	public function toOptionArray()
	{
		return array(
				array('value'=>'elastic', 'label'=>Mage::helper('quickview')->__('Elastic')),
				array('value'=>'fade', 'label'=>Mage::helper('quickview')->__('Fade')),
				array('value'=>'none', 'label'=>Mage::helper('quickview')->__('None'))
		);
	}
}
