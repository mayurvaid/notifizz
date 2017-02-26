<?php
include "./config.php";

class BaseDao{
	public $db;

	function __construct(){
		$config = new Config();
		
		$db = new PDO("mysql:host=$config->db_loc;dbname=$config->db_name",  $config->db_userid, $config->db_pass);
		//I like for failed queries to throw exceptions.
		//If you're not comfortable with exception handling, you would want to omit the following line.
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$this->db=$db;

	}

	public function closeConnection(){
		$this->db = null;
	}
}

?>