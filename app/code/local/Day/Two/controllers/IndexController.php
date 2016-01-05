<?php



class Day_Two_IndexController extends Mage_Core_Controller_Front_Action{	//"IndexController" is a default name
																			// also it is the filename
	public function indexAction(){	//this is the default action
		
		echo('Hello, world!');
		echo('<br>');
		
		echo(Mage::getModel('day_two'));	//get the model of the current module, just for the hell of it
		
		
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
}

