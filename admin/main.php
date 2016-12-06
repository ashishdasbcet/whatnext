<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/adminstyle.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <title>Admin Page</title>
  </head>
  <body>

  <div class="header">
    <ul class="nav nav-pills">
      <li role="presentation"><a href="main.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
        <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Addition<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="unadd.php">University</a></li>
          <li><a href="cgadd.php">College</a></li>
          <li><a href="csadd.php">Courses</a></li>
        </ul>
      </li>
        <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Modify<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="unmodifytable.php">University</a></li>
            <li><a href="cgmodifytable.php">College</a></li>
            <li><a href="csmodifytable.php">Courses</a></li>
          </ul>
        </li>
        <li role="presentation"><a href="index.php">Logout</a></li>
      </ul>
    </div>
  <div class="right">
<br><br><br><br><br>
<h1 class="text-center">Welcome to Admin Page</h1>

  </div>

  </body>
</html>
