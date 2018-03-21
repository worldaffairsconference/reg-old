<?php
	include_once("../common.php");
	if ($reg == True){


		$name   = $_POST['name']; //SANITIZE
		$grade  = $_POST['grade']; //SANITIZE
		$access = $_POST['access']; //SANITIZE
		$ai = "none";
		$bio = "none";
		$c150 = "none";
		$cyber = "none";
		$dev = "none";
		$sustain = "none";
		if (isset($_POST['ai'])) {
			$ai = "selected";
		};
		if (isset($_POST['bio'])) {
			$bio = "selected";
		};
		if (isset($_POST['c150'])) {
			$c150 = "selected";
		};
		if (isset($_POST['cyber'])) {
			$cyber = "selected";
		};
		if (isset($_POST['dev'])) {
			$dev = "selected";
		};
		if (isset($_POST['sustain'])) {
			$sustain = "selected";
		};

		// Build query
		$query = "
			INSERT INTO  `wac`.`students` (
				`id` ,
				`name` ,
				`school` ,
				`grade` ,
				`accessibility`,
				`ai`,
				`bio`,
				`c150`,
				`cyber`,
				`dev`,
				`sustain`
			)

			VALUES (
				NULL ,  '$name',  '$_SESSION[school]',  '$grade', '$access', '$ai', '$bio', '$c150', '$cyber', '$dev', '$sustain'
			);";

		// execute query
		$result = mysql_query($query) or die ("Error in query: ".mysql_error());

		// free result set memory
		mysql_free_result($result);

		// close connection
		mysql_close($connection);

		header('Location: ../delegates.php');
	}
	else{
		echo "Registration is closed.";
	}
?>
