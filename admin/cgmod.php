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
      <h2>Modify College Details </h2>
    </div>


    <?php

    $con=mysqli_connect("localhost","root","","universities");
    if (isset($_GET['edit_row']))
    {
    $edit_id=$_GET['edit_row'];
    $select_row="SELECT * FROM cg_details where id='$edit_id'";
    $run_query=mysqli_query($con,$select_row);
    while ($row_id=mysqli_fetch_array($run_query))
      {
        $old_id=$row_id['id'];
        $old_name=$row_id['cg_name'];
        $old_add=$row_id['cg_add'];
        $old_state=$row_id['cg_state'];
        $old_pin=$row_id['cg_pin'];
        $old_phone=$row_id['cg_phone'];
        $old_site=$row_id['cg_site'];
        $old_reg=$row_id['cg_reg'];


      }
    }
    ?>


     <div class="container">
      <form class="form-horizontal" name="frmCC" action="" method = "post">
    <div class="form-group">
    <label for="text" class="col-sm-2 control-label">College Name</label>
    <div class="col-sm-10">

      <input type="text" class="form-control" name="mod_cg_name" value="<?php echo $old_name;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">College Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mod_cg_add" value="<?php echo $old_add;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">College State</label>
    <div class="col-sm-10">
      <select class="form-control" name="mod_cg_state">
        <option><?php echo $old_state;?></option>
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
    <label for="inputPassword3" class="col-sm-2 control-label">College Pin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mod_cg_pin" value="<?php echo $old_pin;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">College Phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mod_cg_phone" value="<?php echo $old_phone;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">College Website</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mod_cg_site" value="<?php echo $old_site;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Affiliated from following University</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="mod_cg_reg" value="<?php echo $old_reg;?>">
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
  $sql="UPDATE cg_details SET cg_name='$_POST[mod_cg_name]', cg_add='$_POST[mod_cg_add]', cg_state='$_POST[mod_cg_state]', cg_pin='$_POST[mod_cg_pin]', cg_phone='$_POST[mod_cg_phone]', cg_site='$_POST[mod_cg_site]', cg_reg='$_POST[mod_cg_reg]' where id=$old_id";
  $result=mysqli_query($con,$sql);
  echo "<script>alert('Record has been Updated to Table')</script>";
  echo "<script>window.open('cgmodifytable.php','_self')</script>";


}
?>
