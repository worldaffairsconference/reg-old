<?php
  require './common.php';

  if (!$_SESSION['school']) {
    header('Location: index.php');
    die('Redirecting to: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manage <?php echo $_SESSION["school"] ?> | World Affairs Conference</title>
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
      <div class="row">
				<div class="col-sm-2">
					<ul class="nav nav-pills nav-stacked">
					  <li class="nav-item">
					    <a class="nav-link" href="home.php"><span class="fa fa-fw fa-home"></span> Home</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="delegates.php"><span class="fa fa-fw fa-users"></span> Delegates</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link active" href="account.php"><span class="fa fa-fw fa-gear"></span> Account</a>
					  </li>
					</ul>
				</div>
				<div class="col-sm-10">
          <div class="alert alert-info" role="alert">
    				<span class="fa fa-info-circle"></span> Registraiton is closed! Unfortunately, you cannot register any more students for WAC.
    			</div>
          <div class="card">
            <div class="card-block">
              <h1><?php echo $_SESSION["school"] ?>'s Account</h1>
              <h2>Registered email: <?php echo $_SESSION["email"] ?></h2>
              <h2>Actions</h2>
              <a class="btn btn-danger" href="actions/delete_account.php">Delete Account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
