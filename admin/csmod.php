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
      <h2>Modify Course Details </h2>
    </div>

    <?php

    $con=mysqli_connect("localhost","root","","universities");
    if (isset($_GET['edit_row']))
    {
    $edit_id=$_GET['edit_row'];
    $select_row="SELECT * FROM cs_details where id='$edit_id'";
    $run_query=mysqli_query($con,$select_row);
    while ($row_id=mysqli_fetch_array($run_query))
      {
        $old_id=$row_id['id'];
        $old_unname=$row_id['un_name'];
        $old_cgname=$row_id['cg_name'];
        $old_csname=$row_id['cs_name'];
        $old_dur=$row_id['dur'];
        $old_elig=$row_id['elig'];
        $old_strm=$row_id['strm'];
        $old_cstype=$row_id['cs_type'];
        $old_intt=$row_id['intt'];
        $old_whent=$row_id['wh_ent'];
        $old_entname=$row_id['ent_name'];


      }
    }
    ?>

     <div class="container">
      <form class="form-horizontal" name="frmCC" action="" method = "post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">University Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="mod_un_name" value="<?php echo $old_unname;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="text" class="col-sm-2 control-label">College Name</label>
    <div class="col-sm-10">

      <input type="text" class="form-control" name="mod_cg_name" value="<?php echo $old_cgname;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Course Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mod_cs_name" value="<?php echo $old_csname;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Duration</label>
    <div class="col-sm-10">
      <select class="form-control" name="mod_cs_dur">
        <option><?php echo $old_dur;?></option>
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
      <input type="text" class="form-control" name="mod_cs_elig" value="<?php echo $old_elig;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Stream</label>
    <div class="col-sm-10">
      <select class="form-control" name="mod_cs_strm">
        <option><?php echo $old_strm;?></option>
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
      <select class="form-control" name="mod_cs_type">
        <option><?php echo $old_cstype;?></option>
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
      <input type="text" class="form-control" name="mod_cs_intt" value="<?php echo $old_intt;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Whether Entrance</label>
    <div class="col-sm-10">
      <select class="form-control" name="mod_cs_wh">
        <option><?php echo $old_whent;?></option>
        <option label="1">Yes</option>
        <option label="2">No</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Entrance Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mod_cs_ent" value="<?php echo $old_entname;?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-offset-5 col-sm-6">

      <button type="submit" name="submit" class="btn btn-default">Update</button>


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
  $sql="UPDATE cs_details SET un_name='$_POST[mod_un_name]',cg_name='$_POST[mod_cg_name]',cs_name='$_POST[mod_cs_name]',dur='$_POST[mod_cs_dur]',elig='$_POST[mod_cs_elig]',strm='$_POST[mod_cs_strm]',cs_type='$_POST[mod_cs_type]',intt='$_POST[mod_cs_intt]',wh_ent='$_POST[mod_cs_wh]',ent_name='$_POST[mod_cs_ent]' where id=$old_id";
  $result=mysqli_real_query($con,$sql);

  echo "<script>alert('Record has been Updated to Table')</script>";
  echo "<script>window.open('csmodifytable.php','_self')</script>";

}
?>
