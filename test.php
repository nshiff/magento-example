<?php


include 'app/Mage.php';
Mage::app();	//Mage/core/Model/App

$object_example_model = Mage::getModel('catalog/product');

echo(get_class($object_example_model));
echo('<br>');

echo($object_example_model->getName());
echo('<br>');
echo('<br>');

$object = Mage::app()
	->getLayout()
	->createBlock('catalog/product_view');

echo(get_class($object));
echo('<br>');








echo('done');


