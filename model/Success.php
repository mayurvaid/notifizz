<?php
	class Success {
		public $sucessMessage;
		public $responseObj;

		function __construct($sucessMessage,$responseObj){
			$this->sucessMessage = $sucessMessage;
			$this->responseObj = $responseObj;
		}
	}
?>