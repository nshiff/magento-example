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
		echo('<br>');
		$model = Mage::getModel('day_two/whatever');
		echo(get_class($model));

		$forceLog = true;
		Mage::log($model->debug(), Zend_Log::INFO, 'model.log', $forceLog );

	}
	
	public function layoutAction(){	// route 'heyo/index/layout'
		$xml = $this->loadLayout()->getLayout()->getUpdate()->asString();
		
		$this->getResponse()->setHeader('Content Type', 'text/plain')->setBody($xml);
		
		$forceLog = true;
		Mage::log('Exercise: 03 Request Flow 06 Design and Layout Initialization: Magento U', Zend_Log::INFO, 'layout.log', $forceLog);
		Mage::log($xml, Zend_Log::INFO, 'layout.log', $forceLog);
		
		
	}
	
	
	public function defaultAction(){
		
		$this->loadLayout()->renderLayout();
	
	}
	
	
}

