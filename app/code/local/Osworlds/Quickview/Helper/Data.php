<?php

class Osworlds_Quickview_Helper_Data extends Mage_Core_Helper_Abstract {
	
	public function getInlucdeJQquery(){
		if(!(int)Mage::getStoreConfig('quickview/general/active')) return;
		if (!defined('OSWORLDS_JQUERY')  && (int)Mage::getStoreConfig('quickview/general/include_jquery')){
			define('OSWORLDS_JQUERY',1);
			$_jquery_libary = 'osworlds/quickview/js/jquery-1.8.2.min.js';
			return $_jquery_libary;
		}
	}
	
	public function getInlucdeNoconflict(){
		if(!(int)Mage::getStoreConfig('quickview/general/active')) return;
		if (!defined('OSWORLDS_JQUERY_NOCONFLICT')  && (int)Mage::getStoreConfig('quickview/general/include_jquery')){
			define('OSWORLDS_JQUERY_NOCONFLICT',1);
			$_jquery_noconflict = 'osworlds/quickview/js/jquery-noconflict.js';
			return $_jquery_noconflict;
		}
	}
	
	public function getInlucdeElevateZoom(){
		if(!(int)Mage::getStoreConfig('quickview/general/active')) return;
		$_package_name = Mage::getSingleton('core/design_package')->getPackageName();
		$_template_name = Mage::getSingleton('core/design_package')->getTheme('template');
		if($_package_name == 'rwd' && $_template_name == 'default'){
			return  'js/lib/elevatezoom/jquery.elevateZoom-3.0.8.min.js';
		}
	}
	
}