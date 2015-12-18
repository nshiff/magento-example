<?php

class First_Module_Model_Product extends Mage_Catalog_Model_Product{

	public function getName() {
		$name='Samsung Galaxy S6';
		return strtoupper($name);
	}
	
	
	
}