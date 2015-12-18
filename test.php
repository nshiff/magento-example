<?php


include 'app/Mage.php';
Mage::app();

$object = Mage::getModel('catalog/product');

echo(get_class($object));
