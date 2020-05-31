<?php

session_start();


 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
     global $studentname ;
     if(isset($_POST["user"]))
     {
      $studentname = $_POST["user"];
     }
     if(isset($_POST["password"]))
     {
      $studentpass = $_POST["password"];
     }
     else
     {
       # code...
       $studentpass = "null" ;
     }
     $sql = "SELECT username, password FROM register where username='$studentname' and password='$studentpass'";
     $result = mysqli_query($dbc, $sql);



     if(mysqli_num_rows($result) > 0)
     {
       $_SESSION['usernamest'] = $studentname;
       //echo "Welcome $studentname<br />" ;
       header("location:sdashboard.php");

     }else
     {
        header("location:login.php?signin=fail");
     }
     mysqli_close($dbc);
     ?>
  </body>
  </html>
