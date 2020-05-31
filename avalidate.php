<?php

session_start();


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>validation admin</title>
  </head>
  <body>

<?php
    // include connectionn file
    require_once('mysqli_connect.php');
    // Check connection
     ini_set('display_errors', 1);
     error_reporting(E_ALL);
     if(!$dbc)
     {
       die("Connection failed: " . mysqli_connect_error());
     }
     global $adminname ;
     if(isset($_POST["user"]))
     {
      $adminname = $_POST["user"];
     }
     if(isset($_POST["password"]))
     {
      $adminpass = $_POST["password"];
     }
     else
     {
       # code...
       $adminpass = "null" ;
     }
     $sql = "SELECT username, password FROM admin where username='$adminname' and password='$adminpass'";
     $result = mysqli_query($dbc, $sql);



     if(mysqli_num_rows($result) > 0)
     {
          $_SESSION['usernamead'] = $adminname;
          header("location:adashboard.php");
     }else
     {
        header("location:alogin.php?signin=fail");
     }
     mysqli_close($dbc);

     ?>
     <?php include 'footer.php'; ?>
  </body>
  </html>
