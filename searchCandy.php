<?php

   session_start();
   if (!isset($_SESSION['usernamec'])) {
     header("location:index.php?login=null");
   }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search Candidate</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/Bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/Bootstrap.js">
    <link rel="stylesheet" href="RegStyle.css">

  </head>
  <body>
    <div id="container" >

    <?php include 'header.php'; ?>
    <form class="cformreg" action="searchCandydb.php" method="post">
    <div class="row">
      <h1 class="text-left">Search Candidate:</h1>
      <div class="col-md-8">
        <!-- make a row for every label -->
        <div class="row">
          <label class="label col-md-3 control-label">SSLC Aggregate</label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="sslc" placeholder="% in SSLC">
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">HSLC Aggregate</label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="hslc" placeholder="% in HSLC">
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">College Aggregate</label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="clg" placeholder="% in College">
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Departments/Stream</label>
          <div class="col-md-9">
            <select class="form-control select" name="stream">
              <option value="Select">Select</option>
              <option value="Commerce">Commerce</option>
              <option value="Science">Science</option>
              <option value="B.Tech">B.Tech</option>
              <option value="Msc">MSc.</option>
              <option value="bca">BCA</option>
              <option value="Arts">Arts</option>
            </select>
          </div>
        </div>
        <div class="row btn-sub">
          <div class="col-md-6"></div>
          <div class="col-md-3"><input type="submit" class="btn btn-danger" name="submit" value="Search">
          <div class="col-md-3" style="float:right;"> <a href="cdashboard.php">
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
                    echo "<p style='color:red; font-size:20px;'> Error in Connection </p>";
                  }

                 ?>
            </div>
        </div>


        <!-- close -->
      </div>
      <div class="col-md-4">  </div>
    </div>


    </form>

    <?php include 'footer.php'; ?>
  </div>
  </body>
</html>
