<?php
  require './common.php';

  if (!$_SESSION['school']) {
    header('Location: index.php');
    die('Redirecting to: index.php');
  }

  // Make query
  $query = "SELECT COUNT(*) FROM wac.students WHERE school='$_SESSION[school]';";
  // execute query
  $count = mysql_query($query) or die ("Error in query:".mysql_error());
  $count = mysql_fetch_array($count)[0];

  // free result set memory
  mysql_free_result($result);

  // close connection
  mysql_close($connection);
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
					    <a class="nav-link active" href="home.php"><span class="fa fa-fw fa-home"></span> Home</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="delegates.php"><span class="fa fa-fw fa-users"></span> Delegates</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="account.php"><span class="fa fa-fw fa-gear"></span> Account</a>
					  </li>
					</ul>
				</div>
				<div class="col-sm-10">
          <div class="alert alert-info" role="alert">
    				<span class="fa fa-info-circle"></span> Registraiton is closed! Unfortunately, you cannot register any more students for WAC.
    			</div>
          <div class="card">
            <div class="card-block">
              <h1><?php echo $_SESSION["school"] ?> Home</h1>
              <h2><b><?php echo $count ?></b> Registered Delegates</h2>
              <h2>Payment
                <?php
                  if ($_SESSION["payment"] == 0){
                    echo "<span class=\"text-danger\">Not Received</span>";
                  }
                  else if ($_SESSION["payment"] == 1){
                    echo "<span class=\"text-success\">Received</span>";
                  }
                  else{
                    echo "<span class=\"text-warning\">Pending</span>";
                  }
                ?>
              </h2>
              <p class="lead">
                Need help with our registration system? Check out the <a href="https://world.ac/faq/">Frequently Asked Questions page</a>, or <a href="https://world.ac/contact/">contact us.</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
