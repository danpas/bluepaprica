<?php
	class Registry{
		// storage array 
		private $_store	= array();
	
		// singleton declaration
		private static $_instance = null;
		
		public static function getInstance(){
			if(self::$_instance === null){
				self::$_instance = new self();
			} 

			return self::$_instance;
		}
		
		public function setParam($index, $value){
			if(!isset($this->_store[$index])){
				$this->_store[$index] = $value; 
			}
		}
		
		public function getParam($index){
			if(isset($this->_store[$index]))
				return $this->_store[$index];
			
			return false;
		}
	}			
	
	$registry = Registry::getInstance();
	$registry->setParam('logged', '1');
	
	echo $registry->getParam('logged');
	
?>