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
            $user_name = $_POST['Uname'];
            $pass = $_POST['Pass'];

            $name =$_POST['cName'];

            $est = $_POST['estY'];

            $email = $_POST['email'];

            $cont = $_POST['contact'];

            $hr = $_POST['hrName'];


            $select = "SELECT username FROM cregister where username = '$user_name'";
            $result1 = mysqli_query($dbc, $select);
            $num = mysqli_num_rows($result1);

            $query = "INSERT INTO cregister (username, password, Cname, YearEst, email,
             contact, HR_Name) VALUES ('$user_name', '$pass', '$name', '$est',
             '$email', '$cont', '$hr')";

             $result = mysqli_query($dbc, $query);


             if ($num == 1){
               header("location:cRegForm.php?user=exist");
             }elseif($result)
             {
                echo "Registered successfully" ;
                header("location:clogin.php?reg=success");
                //echo "<a style='margin-left: 10%;' href=index.php>BACK</a>" ;

             }
             else
             {
                header("location:cRegForm.php?reg=fail");
             }

             mysqli_close($dbc);
      }
      ?>
      </body>
      </html>
