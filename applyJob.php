<?php

   session_start();
   if (!isset($_SESSION['usernamest'])) {
     header("location:index.php?login=null");
   }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search/Apply Job</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/Bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/Bootstrap.js">
    <link rel="stylesheet" href="RegStyle.css">

  </head>
  <body>
    <div id="container" >

    <?php include 'header.php'; ?>
    <form class="saformreg" action="showJob.php" method="post">
    <div class="row">
      <h1 class="text-left">Search Job:</h1>
      <div class="col-md-8">
        <!-- make a row for every label -->
        <div class="row">
          <label class="label col-md-4 control-label">Job Profile</label>
          <div class="col-md-8">
            <input type="text" class="form-control" name="jobPr">
          </div>
        </div>
        <div class="row">
          <label class="label col-md-4 control-label">Salary Range</label>
          <div class="col-md-4">
            <input type="number" class="form-control" name="sl1" placeholder="Bottom">
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="sl2" placeholder="Top">
          </div>
        </div>

        <div class="row btn-sub">
          <div class="col-md-6"></div>
          <div class="col-md-3"><input type="submit" class="btn btn-danger" name="submit" value="Search">
          <div class="col-md-3" style="float:right;"> <a href="sdashboard.php">
             <input type="button" class="btn btn-info" name="back" value="Back"></a>
          </div>
        </div>
        </div>
        <div class="row btn-sub">
          <div class="col-md-3"> </div>
            <div class="col-md-9">
                  <?php
                  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                  if (strpos($fullUrl, "search=error") == true) {
                    echo "<p style='color:red; font-size:20px;'> *No Such Job Available </p>";
                  }
                  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                  if (strpos($fullUrl, "apply=success") == true) {
                    echo "<p style='color:Orange; font-size:20px;'> *Your Application is Submitted. <br/>ThankYou! </p>";
                  }


                 ?>
            </div>
        </div>


        <!-- close -->
      </div>
      <div class="col-md-4">  </div>
    </div>


    </form>
  </div>
  </body>
</html>
