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

    </div>

    <div class="right">

      <br><br><br>
      <div class="container">

            <form method="post">
        <div class="form-group">
          <h2>Log In</h2><br><br>
          <label for="user1">User ID</label>
          <input type="user" name="user" class="form-control" id="email1" placeholder="User Id">
          </div>
        <div class="form-group">
          <label for="Password1">Password</label>
          <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </form>
      </div>
    </div>

  </body>
</html>
<?php

if(isset($_POST['submit']))
{
  $con=mysqli_connect("localhost","root","","universities");
  $sql="SELECT pass from login where userid=$_GET[user]";
  $result=mysqli_fetch_assoc($con,$sql);

  if ($result==$_GET['password'])
  {
    echo "<script>window.open('main.php','_self')</script>";
  }
  else
  {
    echo "<script>alert('User Id or Password is Incorrect')</script>";
  }

}

?>
