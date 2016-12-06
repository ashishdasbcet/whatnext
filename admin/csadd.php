<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
      <h2>Fill the Form to Add Course Details </h2>
    </div>

     <div class="container">
      <form class="form-horizontal" name="frmCC" action="" method = "post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">University Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="add_un_name" >
    </div>
  </div>
  <div class="form-group">
    <label for="text" class="col-sm-2 control-label">College Name</label>
    <div class="col-sm-10">

      <input type="text" class="form-control" name="add_cg_name" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Course Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="add_cs_name" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Duration</label>
    <div class="col-sm-10">
      <select class="form-control" name="add_cs_dur">
        <option value="null">Select Duration</option>
        <option label="1">6 Months</option>
        <option label="2">1 Year</option>
        <option label="3">2 Years</option>
        <option label="4">3 Years</option>
        <option label="5">4 Years</option>
        <option label="6">5 Years</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Eligibility</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="add_cs_elig" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Stream</label>
    <div class="col-sm-10">
      <select class="form-control" name="add_cs_strm">
        <option value="null">Select Stream</option>
        <option label="1">Physics</option>
        <option label="2">Chemistry</option>
        <option label="3">Biology</option>
        <option label="4">Math</option>
        <option label="4">Commerce</option>
        <option label="4">Arts</option>
      </select>

    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Course Type</label>
    <div class="col-sm-10">
      <select class="form-control" name="add_cs_type">
        <option value="null">Select Course Type</option>
        <option label="1">Certificate</option>
        <option label="2">Diploma</option>
        <option label="3">Bachlor Degree</option>
        <option label="4">Post Graduate Degree</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Interest</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="add_cs_intt" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Whether Entrance</label>
    <div class="col-sm-10">
      <select class="form-control" name="add_cs_wh">
        <option value="null">Whether Entrance Applicable</option>
        <option label="1">Yes</option>
        <option label="2">No</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Entrance Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="add_cs_ent" placeholder="IF Not Available, Fill Up '-'">
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
  if ($_POST['add_un_name']=='' OR $_POST['add_cg_name']=='' OR $_POST['add_cs_name']=='' OR $_POST['add_cs_dur']=='null' OR $_POST['add_cs_elig']=='' OR $_POST['add_cs_strm']=='null' OR $_POST['add_cs_type']=='null' OR $_POST['add_cs_intt']=='' OR $_POST['add_cs_wh']=='null' OR $_POST['add_cs_ent']=='')
  {
    echo "<script>alert('Please Fill up all the fields..')</script>";
    exit();
  }
  else
  {
    $con=mysqli_connect("localhost","root","","universities");
    $sql="INSERT into cs_details (un_name,cg_name,cs_name,dur,elig,strm,cs_type,intt,wh_ent,ent_name) VALUES('$_POST[add_un_name]', '$_POST[add_cg_name]', '$_POST[add_cs_name]','$_POST[add_cs_dur]', '$_POST[add_cs_elig]', '$_POST[add_cs_strm]', '$_POST[add_cs_type]', '$_POST[add_cs_intt]', '$_POST[add_cs_wh]', '$_POST[add_cs_ent]')";
    $result=mysqli_query($con,$sql);
    echo "<script>alert('Record has been Added to Table')</script>";
  }


}
?>
