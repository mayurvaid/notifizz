<?php
	include_once("dao/ItemDao.php");
	session_start();
	class ItemController {
		public $itemDao;
		
		public function __construct()  {  
	        $this->itemDao = new ItemDao();
	    }
	
		public function addItemToNotificationList(){
	    	$entityBody = file_get_contents('php://input');
	    	echo $entityBody;
			$data = json_decode($entityBody);
			$item = new Item();
			foreach ($data as $key => $value){
				$item->$key = $value;
			}
			echo $this->itemDao->addItemToRegistry($item);
		}
	}
?>