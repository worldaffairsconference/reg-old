<?php
  require './common.php';

  if ($_SESSION['school']) {
    header('Location: home.php');
    die('Redirecting to: home.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration | World Affairs Conference</title>
    <meta name="description" content=""/>

    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <script src="js/google_analytics.js"></script>

    <link rel="canonical" href="https://world.ac/" />
  </head>
	<body>
		<?php include_once 'navbar.php' ?>
		<div class="container container-main">
			<div class="alert alert-info" role="alert">
				<span class="fa fa-info-circle"></span> Registraiton is closed! Unfortunately, you cannot register any more students for WAC.
			</div>
			<div>
				<h1>World Affairs Conference Online Registration</h1>
				<h2>Registration is closed: come back when WAC 2018 is ready!</h2>
			</div>
		</div>
	</body>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
    /*
		$("#password").change(function() {
			validatePassword();
		});
		$("#confirm_password").change(function() {
			validatePassword();
		});

		function validatePassword(){
			if($("#password").val() != $("#confirm_password").val()) {
				$("#password_status").html("<span class='fa fa-remove'></span> Passwords don't match!");
				$("#password_status").attr("class", "text-danger");
			}
			else {
				$("#password_status").html("<span class='fa fa-check'></span> Passwords match!");
				$("#password_status").attr("class", "text-success");
			}
		}
    */
	</script>
</html>
