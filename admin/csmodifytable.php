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

    <div class="container-fluid">

        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>University Name</th>
              <th>College Name</th>
              <th>Course Name</th>
              <th>Duration</th>
              <th>Eligibility</th>
              <th>Stream</th>
              <th>Course Type</th>
              <th>Interest</th>
              <th>Entrance Applicable</th>
              <th>Entrance Name</th>
              <th>Option</th>
              <th>Option</th>

            </tr>
          </thead>

          <tbody>

            <?php
              $con=mysqli_connect("localhost","root","","universities");
              $sql="SELECT id,un_name, cg_name, cs_name, dur, elig, strm, cs_type, intt, wh_ent, ent_name FROM cs_details";
              $result=$con->query($sql);

              if ($result->num_rows > 0)
              {
                while($row=$result->fetch_assoc())
                {
            ?>
                  <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["un_name"]; ?></td>
                    <td><?php echo $row["cg_name"]; ?></td>
                    <td><?php echo $row["cs_name"]; ?></td>
                    <td><?php echo $row["dur"]; ?></td>
                    <td><?php echo $row["elig"]; ?></td>
                    <td><?php echo $row["strm"]; ?></td>
                    <td><?php echo $row["cs_type"]; ?></td>
                    <td><?php echo $row["intt"]; ?></td>
                    <td><?php echo $row["wh_ent"]; ?></td>
                    <td><?php echo $row["ent_name"]; ?></td>
                    <td><a href="csmod.php?edit_row=<?php echo $row["id"]?>">Edit</a></td>
                    <td><a href="csdel.php?delete_row=<?php echo $row["id"]?>">Delete</a></td>
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
