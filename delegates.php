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
      <div class="alert alert-info" role="alert">
				<span class="fa fa-info-circle"></span> Registraiton is closed! Unfortunately, you cannot register any more students for WAC.
			</div>
			<div class="row">
				<div class="col-sm-2">
					<ul class="nav nav-pills nav-stacked">
					  <li class="nav-item">
					    <a class="nav-link" href="home.php"><span class="fa fa-fw fa-home"></span> Home</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link active" href="delegates.php"><span class="fa fa-fw fa-users"></span> Delegates</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="account.php"><span class="fa fa-fw fa-gear"></span> Account</a>
					  </li>
					</ul>
				</div>
				<div class="col-sm-10">
					<h1>Manage <?php echo $_SESSION["school"] ?></h1>
					<div class="card">
						<div class="card-block">
							<h2>Register a new delegate</h2>
							<form action="actions/add_student.php" method="post">
								<div class="form-group">
									<label for="name">Name: </label>
									<input class="form-control" required type="text" name="name" id="name">
								</div>
								<div class="form-group">
									<label for="grade">Grade: </label>
									<input class="form-control" required type="number" name="grade" id="grade">
								</div>
                <h3>Plenary Preferences (Select 4 out of 6)</h3>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="ai" value="" id="ai">
                    Artificial Intelligence and the New World
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="bio" value="" id="bio">
                    The New Age of Medicine: Bioinformatics
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="c150" value="" id="c150">
                    Maintaining Canada's Global Presence
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="cyber" value="" id="cyber">
                    The Future of Warfare
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="dev" value="" id="dev">
                    Technology in the Developing World
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="sustain" value="" id="sustain">
                    Roadmap to a Sustainable Future
                  </label>
                </div>
                <div class="form-group">
									<label for="access">Special Notes (such as dietary accomodations): </label>
									<input class="form-control" type="text" name="access" id="access">
								</div>
								<button class="btn btn-success" role="submit"><span class="fa fa-user-plus"></span> Add Delegate</button>
							</form>
						</div>
					</div>
					<div class="card">
						<div class="card-block">
              <div class="table-responsive">
  							<table class="table">
  								<thead class="thead-inverse">
  							    <tr>
  							      <th>Name</th>
  							      <th>Grade</th>
  							      <th>Special Notes</th>
  										<th>Actions</th>
                      <th>Plenary Requested 1</th>
                      <th>Plenary Requested 2</th>
                      <th>Plenary Requested 3</th>
                      <th>Plenary Requested 4</th>
  							    </tr>
  							  </thead>
  								<tbody>
  								<?php

  									// Make query
  									$query = "SELECT * FROM wac.students WHERE school='$_SESSION[school]';";

  									// execute query
  									$result = mysql_query($query) or die ("Error in query:".mysql_error());

                    $count = 0;
  									// For every row
  									while ($row = mysql_fetch_array($result)) {
  										echo "<tr class='table-row'>";
  											echo "<td class='table-cell'>" . $row["name"] . "</td>";
  											echo "<td class='table-cell'>" . $row["grade"] . "</td>";
  											echo "<td class='table-cell'>" . $row["accessibility"] . "</td>";
                        echo "<td class='table-cell'><form action='actions/drop_student.php' method='post'><button class='btn btn-danger' name='name' value='$row[name]'><span class='fa fa-remove'></span> Remove Delegate</button></form></td>";
                        if ($row["ai"] == "selected"){
                          echo "<td class='table-cell'>Artificial Intelligence</td>";
                        }
                        if ($row["bio"] == "selected"){
                          echo "<td class='table-cell'>The New Age of Medicine: Bioinformatics</td>";
                        }
                        if ($row["c150"] == "selected"){
                          echo "<td class='table-cell'>Maintaining Canada's Global Presence</td>";
                        }
                        if ($row["cyber"] == "selected"){
                          echo "<td class='table-cell'>The Future of Warfare</td>";
                        }
                        if ($row["dev"] == "selected"){
                          echo "<td class='table-cell'>Technology in the Developing World</td>";
                        }
                        if ($row["sustain"] == "selected"){
                          echo "<td class='table-cell'>Roadmap to a Sustainable Future</td>";
                        }
  										echo "</tr>";
                      $count += 1;
  									}
  								?>
  								</tbody>
  							</table>
              </div>
              <span class="text-xs-right"><?php echo $count;?> registered delegates</span>
						</div>
					</div>
				</div>
			</div>
		</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $('input.form-check-input').on('change', function(evt) {
        if($('input[type=checkbox]:checked').length > 4) {
          this.checked = false;
        }
      });
   </script>
	</body>
</html>
