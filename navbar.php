<nav class="navbar navbar-light">
  <a class="navbar-brand" href="index.php">WAC Online Registration</a>
  <div class="pull-xs-right">
    <a class="nav-link" href="https://world.ac">WAC Home</a>
    <?php if (!(empty($_SESSION["school"]))){ ?>
    <a class="btn btn-primary" href="actions/logout.php">Logout</a>
    <?php }?>
  </div>
</nav>
