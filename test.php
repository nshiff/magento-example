<?php


include 'app/Mage.php';
Mage::app();	//Mage/core/Model/App


$object_model = Mage::getModel('catalog/product');
echo(get_class($object_model));
echo('<br>');
echo($object_model->getName());
echo('<br>');
echo('<br>');

$object_product = Mage::app()
	->getLayout()
	->createBlock('catalog/product_view');
echo(get_class($object_product));
echo('<br>');
echo('<br>');

$object_resource_model = Mage::getResourceModel('catalog/product');
echo(get_class($object_resource_model));
echo('<br>');
echo('<br>');

$object_helper = Mage::helper('sales');	//subtype 'data' is implied for helpers
echo(get_class($object_helper));
echo('<br>');
echo('<br>');




echo('done');


