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



    <div class="container">
    <h2>Fill the Form to Add University Details </h2>
    </div>


     <div class="container">
      <form class="form-horizontal" name="frmCC" action="" method = "post">
    <div class="form-group">
    <label for="text" class="col-sm-2 control-label">University Name</label>
    <div class="col-sm-10">

      <input type="text" class="form-control" name="add_un_name" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">University Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="add_un_add" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">University State</label>
    <div class="col-sm-10">
      <select class="form-control" name="add_un_state">
        <option value="null">Select a State</option>
        <option label="1">Andhra Pradesh</option>
        <option label="2">Arunachal Pradesh</option>
        <option label="3">Assam</option>
        <option label="4">Bihar</option>
        <option label="6">Chhattisgarh</option>
        <option label="7">Delhi</option>
        <option label="8">Gujarat</option>
        <option label="9">Haryana</option>
        <option label="10">Himachal Pradesh</option>
        <option label="11">Jammu and Kashmir</option>
        <option label="12">Jharkhand</option>
        <option label="13">Karnataka</option>
        <option label="14">Kerala</option>
        <option label="15">Madhya Pradesh</option>
        <option label="16">Maharashtra</option>
        <option label="17">Manipur</option>
        <option label="18">Meghalaya</option>
        <option label="19">Mizoram</option>
        <option label="20">Nagaland</option>
        <option label="21">Orissa</option>
        <option label="22">Puducherry</option>
        <option label="23">Punjab</option>
        <option label="24">Rajasthan</option>
        <option label="25">Sikkim</option>
        <option label="26">Tamil Nadu</option>
        <option label="27">Telangana</option>
        <option label="28">Tripura</option>
        <option label="29">Uttar Pradesh</option>
        <option label="30">Uttarakhand</option>
        <option label="31">West Bengal</option>

      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">University Pin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="add_un_pin" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">University Phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="add_un_phone" placeholder="IF Not Available, Fill Up '-'">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">University Website</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="add_un_site" placeholder="IF Not Available, Fill Up '-'">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">University Type</label>
    <div class="col-sm-10">
      <select class="form-control" name="add_un_type">
        <option value="null">Type of University</option>
        <option label="1">Central</option>
        <option label="2">State</option>
        <option label="3">Deemed</option>
        <option label="4">Private</option>

      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">University Specialization</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="add_un_spec" >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-6">
      <button type="submit" name="submit" class="btn btn-default">Addition</button>

    </div>
  </div>

</form>
    </div>
  </div>
  </body>
</html>
<?php

if (isset($_POST['submit']))
{
  if ($_POST['add_un_name']=='' OR $_POST['add_un_add']=='' OR $_POST['add_un_state']=='null' OR $_POST['add_un_pin']=='' OR $_POST['add_un_phone']=='' OR $_POST['add_un_site']=='' OR $_POST['add_un_type']=='null' OR $_POST['add_un_spec']=='')
   {
    echo "<script>alert('Please Fill up all the fields..')</script>";
    exit();
   }
   else
   {
     $con=mysqli_connect("localhost","root","","universities");
     $sql="INSERT into un_details (un_name,un_add,un_state,un_pin,un_phone,un_site,un_type,un_spec) VALUES('$_POST[add_un_name]', '$_POST[add_un_add]','$_POST[add_un_state]', '$_POST[add_un_pin]', '$_POST[add_un_phone]', '$_POST[add_un_site]', '$_POST[add_un_type]', '$_POST[add_un_spec]')";
     $result=mysqli_query($con,$sql);
     echo "<script>alert('Record has been Added to Table')</script>";
   }

  }
?>
