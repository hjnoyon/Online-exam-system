<?php
/**
* Database class
*/
class Database	
{
	protected $__conn;
	private $__user = 'root';
	private $__pass = '';

	function __construct(){
		
		try {
			$this->__conn = new PDO('mysql:host=localhost;dbname=test', $this->__user, $this->__pass);
		} catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
	}
}

// $result = new Database;