<?php
	class Item{
		public $itemId;
		public $itemDescription;
		public $itemImage;
		public $itemURL;
		public $itemPrice;
		public $notificationList;
		public $emailId;

		function setAllData($itemId,$itemDescription,$itemImage,$itemURL,$notificationList,$emailId
			,$itemPrice){
			$this->itemId = $itemId;
			$this->itemDescription = $itemDescription;
			$this->itemImage = $itemImage;
			$this->itemURL = $itemURL;
			$this->itemPrice = $itemPrice;
			$this->notificationList = $notificationList;
			$this->emailId = $emailId;
		}
	}
?>