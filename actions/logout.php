<?php
	// get the session
	session_start();
	
	// remove all session variables
	session_unset(); 
	
	// destroy the session 
	session_destroy(); 

	// Bye bye user!
	header('Location: ../index.php');
?>