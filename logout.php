<?php 
	session_start();
	// Destroying the session 
	session_destroy();
	// redirect user to the home page.
	header("Location: index.php");