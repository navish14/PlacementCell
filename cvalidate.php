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
     global $compname ;
     if(isset($_POST["user"]))
     {
      $compname = $_POST["user"];
     }
     if(isset($_POST["password"]))
     {
      $comppass = $_POST["password"];
     }
     else
     {
       # code...
       $comppass = "null" ;
     }
     $sql = "SELECT username, password FROM cregister where username='$compname' and password='$comppass'";
     $result = mysqli_query($dbc, $sql);



     if(mysqli_num_rows($result) > 0)
     {
       $_SESSION['usernamec'] = $compname;
      // echo "Welcome $compname<br />" ;
       header("location:cdashboard.php");

     }else
     {
        header("location:clogin.php?signin=fail");
     }
     mysqli_close($dbc);
     ?>
  </body>
  </html>
