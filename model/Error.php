<?php
	class Error {
		public $errorCode;
		public $errorMessage;

		function __construct($errorCode,$errorMessage){
			$this->errorMessage = $errorMessage;
			$this->errorCode = $errorCode;
		}
	}
?>