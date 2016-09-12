<?php


class Dm_Speed_Model_Observer {




	/**
	 * @param Varien_Event_Observer $observer
	 * @return void
	 */
	public function controller_front_init_before (
		Varien_Event_Observer $observer
	) {

			$configValue = Mage::getStoreConfig(
                   'dm_speed/general/enable_zend_date_caching',
                   Mage::app()->getStore()
               );

							 if($configValue){
									Zend_Date::setOptions(array('cache' => Mage::app()->getCache()));
							 }



	}










}
