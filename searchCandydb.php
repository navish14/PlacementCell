<?php

   session_start();

 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Details</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="show.css">
    <!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <script>

   function emailsent() {
     var x = document.getElementById('n1').value;
     alert("Email Sent to: "+ x);
   }
   </script>

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
     if(isset($_POST['submit']))
     {

            $sslc =$_POST['sslc'];

            $hslc = $_POST['hslc'];

            $clg = $_POST['clg'];

            $stream = $_POST['stream'];



            $query = "SELECT name, age, gender, email, contact, Matric_Per, HSC_Per, College_Per FROM register where Matric_Per between '$sslc' and 100 and
            HSC_Per between '$hslc' and 1000 and College_Per between '$clg' and 100 and Stream = '$stream'";

             $result = mysqli_query($dbc, $query);
             if($result)
             {



                if(mysqli_num_rows($result))
                  {

                    echo "<br/><br/><br/><br/><h1 id='headtext'>found a match</h1>" ;
                    echo "<table class='table1'>" ;
                    //echo "<th>Name</th>"   ;
                    echo "<p id='stHead'><b>Student Details</b></p>" ;
                    echo "<tbody>" ;
                    echo "<th>Name</th>   <th>Age</th>  <th>Gender</th>  <th>Email</th>
                    <th>PerM(%)</th> <th>PerH(%)</th> <th>PerC(%)</th> <th>Contact</th> </b><br />" ;
                    while($row = mysqli_fetch_assoc($result))
                    {
                      echo "<tr><td> &nbsp"  . $row["name"] . " &nbsp </td>" ;
                      echo " &nbsp <td>"  . $row["age"] . " &nbsp</td>" ;
                      echo " &nbsp <td>"  . $row["gender"] . " &nbsp</td>" ;
                      echo " &nbsp <td>"  . $row["email"] . " &nbsp</td>" ;
                      echo " &nbsp <td>"  . $row["Matric_Per"] . " &nbsp</td>" ;
                      echo " &nbsp <td>"  . $row["HSC_Per"] . " &nbsp</td>" ;
                      echo " &nbsp <td>"  . $row["College_Per"] . " &nbsp</td>" ;
                      echo " &nbsp <td>"  . $row["contact"] . " &nbsp</td></tr> <br />" ;
                    }
                    echo "</tbody>" ;
                    echo "</table> <br/>" ;
                    echo "<div class='container'>
                          <form method='post'>
                           <div class='row btn-sub'>
                              <div class='col-md-6'>
                                <input id='n1' class='form-control form1' type='text' name='stdemail'
                                placeholder='Enter Email'>
                              </div>
                              <div class='col-md-6'></div>
                            </div>
                            <div class='row btn-sub'>
                               <div class='col-md-6'>
                                <input class='form-control form1' type='textarea' name='msg'
                                placeholder='type your message'/>
                              </div>
                              <div class='col-md-6'></div>
                            </div>
                            <div class='row btn-sub'>
                               <div class='col-md-6'>
                                <button class='btn btn-primary' type='submit'
                                onclick='emailsent();return false'>SUBMIT</button>
                              </div>
                              <div class='col-md-6'><a href='searchCandy.php'>
                              <button class='btn btn-primary' type='button' value='Back' >Back</button></a></div>
                            </div>
                           </form>
                           </div>" ;

                    echo "<a class='logout btn btn-danger' href='index.php'>LOGOUT</a><br/>";

                  }
                  else
                  {
                     echo "<br/><br/><br/><br/><h1 id='headtext'>No Any details found</h1>" ;
                     echo "<a class='logout btn btn-danger' href='index.php'>LOGOUT</a><br/>";
                     echo "<a href='searchCandy.php'><button class='btn btn-primary' type='button' value='Back' >Back</button></a>";
                  }





             }
             else
             {
                header("location:searchCandy.php?search=error");
             }

             mysqli_close($dbc);
      }
      ?>
      </body>
      </html>
