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
    <title>Vacancy Details</title>

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
     if(isset($_POST['submit']))
     {

            $jobpr =$_POST['jobPr'];

            $sl1 = $_POST['sl1'];

            $sl2 = $_POST['sl2'];




            $query = "SELECT * FROM vacancy where jobProfile = '$jobpr' and salary between '$sl1' and '$sl2'";

             $result = mysqli_query($dbc, $query);

              if(mysqli_num_rows($result))

                  {

                      echo "<br/><br/><br/><br/><h1 id='headtext'>found a match</h1>" ;
                      echo "<table class='table1'>" ;
                      //echo "<th>Name</th>"   ;
                      echo "<p id='stHead'><b>Vacancy Details</b></p>" ;
                      echo "<tbody>" ;
                      echo "<th>Sr.No</th>   <th>CompanyName</th>  <th>JobProfile</th>
                      <th>Salary</th>  <th>Eligiblity</th> <th>Bond</th> <th>Email</th> </b><br />" ;
                      while($row = mysqli_fetch_assoc($result))
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

                      echo "<div class='container'>
                            <form method='post' action='applyjob.php?apply=success'>
                            <div class='row btn-sub'>
                               <div class='col-md-6'>
                                 <input class='form-control form1' type='text' name='vid' placeholder='Enter Vacancy No./Vid' />
                               </div>
                               <div class='col-md-6'></div>
                             </div>
                             <div class='row btn-sub'>
                                <div class='col-md-6'>
                                  <input class='form-control form1' type='text' name='cname' placeholder='Enter Company Name' />
                                </div>
                                <div class='col-md-6'></div>
                              </div>

                              <div class='row btn-sub'>
                                 <div class='col-md-6'>
                                  <input class='form-control form1' type='email' name='myemail' placeholder='Your Email'/>
                                </div>
                                <div class='col-md-6'></div>
                              </div>
                              <div class='row btn-sub'>
                                 <div class='col-md-6'>
                                  <button class='btn btn-primary' type='submit' value='submit' >SUBMIT</button>
                                </div>
                                <div class='col-md-6'><a href='applyjob.php'>
                                <button class='btn btn-primary' type='button' value='Back' >Back</button></a></div>
                              </div>
                             </form>
                            </div>" ;



                      echo "<a class='logout btn btn-danger' href='index.php'>LOGOUT</a><br/>";

                    }
                    else
                    {
                       echo "<br/><br/><br/><br/><h1 id='headtext'>Details Not Matched</h1>" ;
                       echo "<a class='logout btn btn-danger' href='index.php?act=logout'>LOGOUT</a><br/>";

                       $query2 = "SELECT * FROM vacancy";

                        $result2 = mysqli_query($dbc, $query2);

                       if(mysqli_num_rows($result2))

                           {

                               echo "<br/><br/><br/><br/><h1 id='headtext'>Showing All Available Vacancies:</h1>" ;
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

                               echo "<div class='container'>
                                     <form method='post' action='applyjob.php?apply=success'>
                                     <div class='row btn-sub'>
                                        <div class='col-md-6'>
                                          <input class='form-control form1' type='text' name='vid' placeholder='Enter Vacancy No./Vid' />
                                        </div>
                                        <div class='col-md-6'></div>
                                      </div>
                                      <div class='row btn-sub'>
                                         <div class='col-md-6'>
                                           <input class='form-control form1' type='text' name='cname' placeholder='Enter Company Name' />
                                         </div>
                                         <div class='col-md-6'></div>
                                       </div>

                                       <div class='row btn-sub'>
                                          <div class='col-md-6'>
                                           <input class='form-control form1' type='email' name='myemail' placeholder='Your Email'/>
                                         </div>
                                         <div class='col-md-6'></div>
                                       </div>
                                       <div class='row btn-sub'>
                                          <div class='col-md-6'>
                                           <button class='btn btn-primary' type='submit' value='submit' >SUBMIT</button>
                                         </div>
                                         <div class='col-md-6'><a href='applyjob.php'>
                                         <button class='btn btn-primary' type='button' value='Back' >Back</button></a></div>
                                       </div>
                                      </form>
                                     </div>" ;

                             }
                    }

              } else
               {
                  header("location:applyjob.php?search=error");
               }

               mysqli_close($dbc);



include 'footer.php';
      ?>
      </body>
      </html>
