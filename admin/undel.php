<?php
$con=mysqli_connect("localhost","root","","universities");
if (isset($_GET['delete_row']))
{
  $delete_id=$_GET['delete_row'];
  $delete_row= "DELETE from un_details where id='$delete_id'";
  $run_delete=mysqli_query($con,$delete_row);
  echo "<script>alert('Data has been Deleted')</script>";
  echo "<script>window.open('unmodifytable.php','_self')</script>";
}

?>
