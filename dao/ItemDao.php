<?php
	include "BaseDao.php";
	include_once("model/Item.php");
	include_once("model/Error.php");
	include_once("model/Success.php");

	class ItemDao{
		private $baseDao;

		function __construct(){
			$baseDao = new BaseDao();
			$this->baseDao = $baseDao;
		}

		function addItemToRegistry($item){
			$insertStmt = $this->baseDao->db->prepare("INSERT INTO item (item_desc,item_img,item_url,item_price,notification_list,email_i)
			 VALUES (:itemDescription, :itemImage,:itemURL,:itemPrice,:notificationList,:emailId)");
		    $timestamp = date('Y-m-d G:i:s');
		  	
		  	try {
			  	$insertStmt->execute(array(
		            'itemDescription' => $item->itemDescription,
		            'itemImage' => $item->itemImage,
		            'itemURL' => $item->itemURL,
		            'itemPrice' => $item->itemPrice,
		            'notificationList' => $item->notificationList,
		            'emailId' => $item->emailId
		        ));
		        $item->itemId = $this->baseDao->db->lastInsertId();
		    } catch (Exception $e) {
		    	http_response_code(500);
		    	header('Content-Type: application/json');

		    	$error = new Error("1000","An error occurred while aadding the item");

		    	return json_encode($error);
		    }

		    http_response_code(200);
		    header('Content-Type: application/json');

		    $success = new Success("success",$item);
		    return json_encode($success);
		}
	}

?>