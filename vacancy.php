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
    <title>Company Registration</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/Bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/Bootstrap.js">
    <link rel="stylesheet" href="RegStyle.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <form class="cformreg" action="postvacancy.php" method="post">
      <div class="row btn-sub">
        <div class="col-md-3"> </div>
          <div class="col-md-9">
                <?php
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if (strpos($fullUrl, "vacancy=success") == true) {
                  echo "<p style='color:lightgreen; font-size:20px;'> *Vacancy Posted<br/>Would You like to Post Another One? </p>";
                }

                if (strpos($fullUrl, "vacancy=fail") == true) {
                  echo "<p style='color:lightgreen; font-size:20px;'> *Vacancy not Posted!Error!</p>";
                }

               ?>
          </div>
      </div>
    <div class="row">
      <h1 class="text-left">Post New Vacancy:</h1>
      <div class="col-md-8">
        <!-- make a row for every label -->
        <div class="row">
          <label class="label col-md-3 control-label">Company Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="cName">
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Job Profile</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="job">
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Salary</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="salary">
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Eligibility Criteria</label>
          <div class="col-md-9">
            <input type="textarea" class="form-control" name="eligibility">
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Bond (Leave Blank if No*)</label>
          <div class="col-md-9">
            <input type="textarea" class="form-control" name="bond">
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Email</label>
          <div class="col-md-9">
            <input type="email" class="form-control" name="email">
          </div>
        </div>

        <div class="row btn-sub">
          <div class="col-md-6"></div>
          <div class="col-md-3"><input type="submit" class="btn btn-danger" name="submit" value="Post">
          <div class="col-md-3" style="float:right;"><a href="cdashboard.php">
            <input type="button" class="btn btn-info" name="back" value="Back"></a>
          </div>
        </div>
        </div>

        <!-- close -->
      </div>
      <div class="col-md-4"></div>
    </div>
    </form>


    <?php include 'footer.php'; ?>
  </body>
</html>
