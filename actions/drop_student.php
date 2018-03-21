<?php
	include_once("../common.php");
	if ($reg == True){
		$name = $_POST['name']; //SANITIZE

		// Build query
		$query = "DELETE FROM wac.students WHERE students.name='$name' AND students.school='$_SESSION[school]';";

		// execute query
		$result = mysql_query($query) or die ("Error in query: ".mysql_error());

		// free result set memory
		mysql_free_result($result);

		// close connection
		mysql_close($connection);
	}
	else{
		echo "Registration is closed.";
	}

	header('Location: ../delegates.php');
?>
