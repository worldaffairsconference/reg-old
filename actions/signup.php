<?php
	include_once("../common.php");

	$school = $_POST['school']; //SANITIZE
	$email = $_POST['email']; //SANITIZE

	// Uber-secure salt generator
	function new_salt($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	// Make a salt
	$salt = new_salt();

	// The hash is just md5 of password+salt. High security, I know
	$hash_password = md5($_POST['password'] . $salt);

	// "Hey Chuck, should we check if there are gonna be any conflicts before we make a new user?"
	// "Nah"
	// "But what if..."
	// "Tom, shut up and write the damn signup function"
	// "OK Chuck"
	$query = "
	INSERT INTO  `wac`.`schools` (`id`, `school`, `email`, `password`, `salt`, `payment`) 
	VALUES (NULL,
		'$school',
		'$email',
		'$hash_password',
		'$salt',
		0);";

	// execute query
	$result = mysql_query($query) or die ("Error in query: ".mysql_error());
	
	// free result set memory
	mysql_free_result($result);
	
	// close connection
	mysql_close($connection);

	header('Location: ../index.php#login');
?>