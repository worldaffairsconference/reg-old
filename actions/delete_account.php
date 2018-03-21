<?php
	include_once("../common.php");

	$email  = $_POST['email'];
	$school = $_SESSION['school'];

	// Build query
	$query = "DELETE FROM wac.schools WHERE schools.school='$school';";

	// execute query
	$result = mysql_query($query) or die ("Error in query: ".mysql_error());
	
	// free result set memory
	mysql_free_result($result);
	
	// close connection
	mysql_close($connection);

	header('Location: ./logout.php');
?>