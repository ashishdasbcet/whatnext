<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <title>WhatNext - Courses On Your Fingertip</title>
  </head>
  <body class="body_img">



    <div class="container">
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>


          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
              <li><a href="index.php">HOME</a></li>
              <?php
              $con=mysqli_connect("localhost","root","","universities");
              $sql="SELECT * FROM navbar_items WHERE cat_num=0";
              $pquery=mysqli_query($con,$sql);
               ?>
              <?php while ($parent=mysqli_fetch_assoc($pquery)) : ?>
              <?php
              $parent_id=$parent['id'];
              $sql2="SELECT * FROM navbar_items WHERE cat_num='$parent_id'";
              $cquery=mysqli_query($con,$sql2);
               ?>
              <li class="dropdown cur_point">
                <a class="dropdown-toggle" data-toggle="dropdown" id="text"><?php echo $parent['category']; ?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <?php while ($child= mysqli_fetch_assoc($cquery)) : ?>
                  <li><a href="#"><?php echo $child['category'] ?></a></li>

                <?php endwhile; ?>
                  </ul>

              </li>
            <?php endwhile; ?>
              <li><a href="#">CONTACT</a></li>


            </ul>
            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    </div>

  </body>
</html>
