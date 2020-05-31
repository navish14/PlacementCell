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
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Student Dashboard</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
<body id="page-top">
  <nav>
      <div class="row">
        <div class="col-md-3 logo">
          <a href="index.php"> <img  src="img/logo2.png" alt="Logo_img"/> </a>
        </div>
        <div class="col-md-9">
          <ul class="main-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="">REGISTER</a>
              <ul class="dropdown">
                <li><a href="sRegForm.php">STUDENT</a></li>
                <li><a href="cRegForm.php">COMPANY</a></li>
              </ul>
            </li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#team">TEAM</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
          </ul>
         </div>
       </div>
     </nav>
<header>
  <div class="container">
    <div class="slider-container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome</div>
        <div class="intro-heading">Do Your Thing..!!</div>
        <a style="margin-right:10px;"href="applyjob.php" class="page-scroll btn btn-xl">Apply Job</a>
        <a href="showAllVac.php" class="page-scroll btn btn-xl">See All Vacancies</a>
      </div>
    </div>
  </div>
</header>
<?php include 'footer.php'; ?>

</body>
</html>
