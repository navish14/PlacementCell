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
            $user_name = $_POST['sUname'];
            $pass = $_POST['sPass'];

            $name =$_POST['sName'];

            $f_name = $_POST['sFName'];

            $age = $_POST['sAge'];

            $dob = $_POST['sDob'];

            $sex = $_POST['sGender'];

            $email = $_POST['sEmail'];

            $cont = $_POST['sContact'];

            $city = $_POST['sCity'];

            $mSchool= $_POST['sSchoolNameM'];

            $hSchool= $_POST['sSchoolNameH'];

            $clg_name = $_POST['sCollegeName'];

            $stream = $_POST['sStream'];

            $matricP = $_POST['matric'];

            $hscP = $_POST['hsc'];

            $clgP = $_POST['college'];

            $matric_y = $_POST['matricY'];

            $hsc_y = $_POST['hscY'];

            $clg_y = $_POST['collegeY'];

            $otrQl = $_POST['otrQ'];

            $select1 = "SELECT username FROM register where username = '$user_name'";
            $result2 = mysqli_query($dbc, $select1);
            $num1 = mysqli_num_rows($result2);



            $query = "INSERT INTO register (username, password, name, fname,age, dob, gender, email,
             contact, city, school_Name_M, school_Name_H, college_Name, Stream, Matric_Per, HSC_Per, College_Per,
             Matric_Pass_Year, HSC_Pass_Year, Clg_Pass_Year, Other_Qlfctn) VALUES ('$user_name', '$pass', '$name', '$f_name',
             '$age', '$dob', '$sex', '$email', '$cont', '$city', '$mSchool', '$hSchool', '$clg_name', '$stream', '$matricP', '$hscP', '$clgP',
             '$matric_y', '$hsc_y', '$clg_y', '$otrQl')";

             $result = mysqli_query($dbc, $query);


             if ($num1 == 1)
             {
               header("location:sRegForm.php?user=exist");
             }elseif($result)
              {
                echo "Registered successfully" ;
                header("location:login.php?reg=success");
                //echo "<a style='margin-left: 10%;' href=index.php>BACK</a>" ;

              }
             else
             {
                header("location:sRegForm.php?reg=fail");
             }

             mysqli_close($dbc);
     }
?>
  </body>
</html>
