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
     if(isset($_POST['submit']))
     {

            $name =$_POST['cName'];

            $job = $_POST['job'];

            $sal = $_POST['salary'];

            $egb = $_POST['eligibility'];

            $bond = $_POST['bond'];
            $email = $_POST['email'];

            $query = "INSERT INTO vacancy (c_name, jobProfile, salary, eligibility, bond,
             email) VALUES ('$name', '$job', '$sal', '$egb', '$bond',
             '$email')";

             $result = mysqli_query($dbc, $query);
             if($result)
             {
                echo "Posted successfully" ;
                header("location:vacancy.php?vacancy=success");
                //echo "<a style='margin-left: 10%;' href=index.php>BACK</a>" ;

             }
             else
             {
                header("location:vacancy.php?vacancy=fail");
             }

             mysqli_close($dbc);
      }
      ?>
      </body>
      </html>
