<?php 
	include_once("controller/ItemController.php");

	$itemController = new ItemController();
	
	if($_SERVER['REQUEST_METHOD'] == "GET"){
	}else if($_SERVER['REQUEST_METHOD'] == "POST"){
		$action = $_REQUEST["action"];
		if(isset($action)){
			switch ($action){
				case "addItem" :
					$itemController->addItemToNotificationList();
				break;
			}
		}
	}
?>