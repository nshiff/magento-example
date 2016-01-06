<?php



class Day_Two_IndexController extends Mage_Core_Controller_Front_Action{	//"IndexController" is a default name
																			// also it is the filename
	public function indexAction(){	// route 'heyo' hits default action
		
		echo('Hello, world!');
		echo('<br>');
		
	}
	
	public function modelAction(){	// route 'heyo/index/model'
		
		echo('hi');
		echo('<br>');
		echo(get_class($this));
		echo(get_class(Mage::getModel('day_two/whatever')));		
		
	}
	
	
	public function layoutAction(){	// route 'heyo/index/layout'
		
		echo('heyo/index/layout');
		
	}
	
	
}

