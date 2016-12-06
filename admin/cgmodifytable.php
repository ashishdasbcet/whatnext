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
      <h2>Select the Data to Modify</h2>
    </div>

    <div class="container">

        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>College Name</th>
              <th>College Address</th>
              <th>State</th>
              <th>PIN</th>
              <th>Phone</th>
              <th>Website</th>
              <th>Affiliated With</th>
              <th>Option</th>
              <th>Option</th>

            </tr>
          </thead>

          <tbody>

            <?php
              $con=mysqli_connect("localhost","root","","universities");
              $sql="SELECT id,cg_name, cg_add, cg_state, cg_pin, cg_phone, cg_site, cg_reg FROM cg_details";
              $result=$con->query($sql);

              if ($result->num_rows > 0)
              {
                while($row=$result->fetch_assoc())
                {
            ?>
                  <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["cg_name"]; ?></td>
                    <td><?php echo $row["cg_add"]; ?></td>
                    <td><?php echo $row["cg_state"]; ?></td>
                    <td><?php echo $row["cg_pin"]; ?></td>
                    <td><?php echo $row["cg_phone"]; ?></td>
                    <td><?php echo $row["cg_site"]; ?></td>
                    <td><?php echo $row["cg_reg"]; ?></td>
                    <td><a href="cgmod.php?edit_row=<?php echo $row["id"]?>">Edit</a></td>
                    <td><a href="cgdel.php?delete_row=<?php echo $row["id"]?>">Delete</a></td>
                  </tr>

                <?php

                }

              }
              else
              {
                echo "<script>alert('Table is Empty')</script>";
                exit();
              }
               ?>


          </tbody>

        </table>


    </div>
</div>

  </body>
</html>
