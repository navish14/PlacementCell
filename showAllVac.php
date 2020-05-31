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
    <title>All Vacancy Details</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="show.css">
    <!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


  </head>
  <body>

    <?php include 'header.php'; ?>

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
     echo "<br/><br/><br/><br/><h1 id='headtext'>Showing All Records</h1>" ;
     echo "<a class='logout btn btn-danger' href='index.php?act=logout'>LOGOUT</a><br/>";
     echo "<a class='logout btn btn-primary' href='sdashboard.php'>Back</a><br/>";


                       $query2 = "SELECT * FROM vacancy";

                        $result2 = mysqli_query($dbc, $query2);

                       if(mysqli_num_rows($result2))

                           {

                            //   echo "<br/><br/><br/><br/><h1 id='headtext'>Showing All Available Vacancies:</h1>" ;
                               echo "<table class='table1'>" ;
                               //echo "<th>Name</th>"   ;
                               echo "<p id='stHead'><b>Vacancy Details</b></p>" ;
                               echo "<tbody>" ;
                               echo "<th>Sr.No</th>   <th>CompanyName</th>  <th>JobProfile</th>
                               <th>Salary</th>  <th>Eligiblity</th> <th>Bond</th> <th>Email</th> </b><br />" ;
                               while($row = mysqli_fetch_assoc($result2))
                               {
                                 echo "<tr><td> &nbsp"  . $row["vid"] . " &nbsp </td>" ;
                                 echo " &nbsp <td>"  . $row["c_name"] . " &nbsp</td>" ;
                                 echo " &nbsp <td>"  . $row["jobProfile"] . " &nbsp</td>" ;
                                 echo " &nbsp <td>"  . $row["salary"] . " &nbsp</td>" ;
                                 echo " &nbsp <td>"  . $row["eligibility"] . " &nbsp</td>" ;
                                 echo " &nbsp <td>"  . $row["bond"] . " &nbsp</td>" ;
                                 echo " &nbsp <td>"  . $row["email"] . " &nbsp</td></tr> <br />" ;
                               }
                               echo "</tbody>" ;
                               echo "</table> <br/>" ;



              }

               mysqli_close($dbc);



include 'footer.php';
      ?>
      </body>
      </html>
