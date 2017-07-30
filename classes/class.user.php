<?php 
	// require database.php
	require_once 'inc/database.php';

	/**
	* Users class
	* to manage all users data 
	*/
	class Users extends Database
	{
		private $_conn;
		/**
		* This method is used to create connection with database.
		* by creating a instance of Database class.
		* Set the $_conn variable as a database connection
		*/
		function __construct()
		{
			$dbcon = new Database;;
			$this->_conn = $dbcon->__conn;
		}

		/**
		* Login method
		* User will get logged in using their username and password
		* @param username String
		* @param password String
		* @return bool
		*/
		public function login($username, $password){
			if (!empty($username) && !empty($password)) {
				try {
					// database query here.
					$stmt = $this->_conn->prepare("SELECT * from `users` WHERE username = ?  AND password = ? ");
					$stmt->execute(array($username, sha1($password) ));
					if ($stmt->rowCount() > 0) {
						$_SESSION['usr_login'] = true;
						return true;
					}
					return false;
				} catch (PDOException $e) {
					return $e->getMessage();
				}
			}else{
				return false;
			}
			
		}

		/**
		* Register method
		* User can sign up using their details
		* @param fullname String (255 char)
		* @param email String (250 char)
		* @param username String (64 char)
		* @param password String (255 char)	
		* @return successful message String.
		*/
		public function register( $fullname, $email, $username, $password){
			
			if (!empty($fullname) && !empty($email) && !empty($username) && !empty($password) ) {
				try {
					// Database query here
					$stmt = $this->_conn->prepare("INSERT INTO `users`(fullname, email, username, password) VALUES(?,?,?,?)");
					$stmt->execute(array($fullname, $email, $username, sha1($password)));
					if ($stmt->rowCount() > 0) {
						return '<div class="alert alert-success mt-3" role="alert">
								  <strong>Registration success!</strong>
								</div>';
					}
					//return $this->_conn;
				} catch (PDOException $e) {
					return $e->getMessage();
				}
			}else{
				return '<div class="alert alert-warning mt-3" role="alert">
							<strong>All field must be filled up.</strong>
						</div>';
			}
		}
	}	

	$output = new Users;

?>