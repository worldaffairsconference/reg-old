<?php
	include_once("../common.php");

	$email    = $_POST['email']; //SANITIZE
	$password = $_POST['password']; //SANITIZE

	// Build query
	$query = "SELECT * FROM wac.schools WHERE email='$email';";

	// execute query
	$result = mysql_query($query) or die ("Error in query:".mysql_error());


	$access = false;
	while ($row = mysql_fetch_array($result)) {

		// Hash the use pass with that rows salt
		$hashed = md5($password . $row['salt']);

		// If they match, user checks out
		if ($hashed === $row['password']) {
			$_SESSION['email'] = $row['email'];
			$_SESSION['school'] = $row['school'];
			$_SESSION['payment'] = $row['payment'];
			$access = true;
			// free result set memory
			mysql_free_result($result);

			// close connection
			mysql_close($connection);

			// Set header
			header('Location: ../home.php');

		}
	}

	echo "Access Denied";
?>
