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
		<title>PLACEMENT CELL</title>
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


          </ul>
         </div>
       </div>
     </nav>

<header>
  <div class="container">
    <div class="slider-container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To Your Own World</div>
        <div class="intro-heading">It's Nice To Meet You</div>
        <a style="margin-right:10px;" href="login.php" class="page-scroll btn btn-xl">Enter Student</a>
        <a style="margin-right:10px;" href="alogin.php" class="page-scroll btn btn-xl">ENTER Admin</a>
        <a href="cLogin.php" class="page-scroll btn btn-xl">ENTER Company</a>
      </div>
    </div>
  </div>
</header>
<div class="row btn-sub">
  <div class="col-md-3"> </div>
    <div class="col-md-9">
          <?php
          $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

          if (strpos($fullUrl, "act=logout") == true) {
            echo "<script> alert('LoggedOut-ThankYou Come Visit Again :)')</script>";
          }
          if (strpos($fullUrl, "login=null") == true) {
            echo "<script> alert('Access Denied! Login First')</script>";
          }
         ?>
    </div>
</div>
<section id="about" class="light-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title">
          <h2>ABOUT</h2>
          <p>A one to Go only Place For Landing to Your Own Dream Place.
             WE are one of the best in town TRAVERSE along with Us Please.</p><br/>
             <p> Our Forte is in Placing Students To the Best Of Jobs Like In: </p>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- about module -->
      <div class="col-md-3 text-center">
        <div class="mz-module-about">
          <i class="fa fa-briefcase ot-circle"></i>
          <h3>Web Development</h3>
          <p>Web development can range from developing a simple single static page
            of plain text to complex web-based internet applications, electronic businesses,
            and social network services.</p>
        </div>
      </div>
      <!-- end about module -->
      <!-- about module -->
      <div class="col-md-3 text-center">
        <div class="mz-module-about">
          <i class="fa fa-photo ot-circle"></i>
          <h3>Visualisation</h3>
          <p>A content Maker, Imaginative Mind can only Make his way into this job .zJobs That are in Par with High Pay, Living Standard and Future Growth.</p>
        </div>
      </div>
      <!-- end about module -->
      <!-- about module -->
      <div class="col-md-3 text-center">
        <div class="mz-module-about">
          <i class="fa fa-camera-retro ot-circle"></i>
          <h3>Photography</h3>
          <p>Job that requires a passion vision and eye of an imaginator, if You are One of those person who thinks they can do big in this field Than this is the Job for your
             Jobs That are in Par with High Pay, Living Standard and Future Growth.</p>
        </div>
      </div>
      <!-- end about module -->
      <!-- about module -->
      <div class="col-md-3 text-center">
        <div class="mz-module-about">
          <i class="fa fa-cube ot-circle"></i>
          <h3>UI/UX Design</h3>
          <p> User Interface and User Experience the job that requires you to be a thinker,
            The work of a UI/UX Developer is to ask question on behalf of the end user and
            trying to make answers availabe through the UserInterface in order to keep its site engaging.</p>
        </div>
      </div>
      <!-- end about module -->
    </div>
  </div>
  <section class="overlay-dark bg-img1 dark-bg short-section">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-3 mb-sm-30">
          <div class="counter-item">
            <h2 data-count="59">59</h2>
            <h6>Potential Companies</h6>
          </div>
        </div>
        <div class="col-md-3 mb-sm-30">
          <div class="counter-item">
            <h2 data-count="1054">1054</h2>
            <h6>Clients</h6>
          </div>
        </div>
        <div class="col-md-3 mb-sm-30">
          <div class="counter-item">
            <h2 data-count="27">21</h2>
            <h6>LPA Salary Package</h6>
          </div>
        </div>
        <div class="col-md-3 mb-sm-30">
          <div class="counter-item">
            <h2 data-count="154">154</h2>
            <h6>Avg. Student Visit Count</h6>
          </div>
        </div>
      </div>
    </div>
  </section>
<section>



</section>
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <div class="section-title">
        <h2>Our Partners &amp; Clients</h2>
        <hr>
      <?php include 'slider.php'; ?>
      </div>
    </div>
  </div>
</div>

<section id="team" class="light-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title">
          <h2>Our Team</h2>
          <p>A creative agency based on Candy Land, ready to Land you on your Dream Job Place. That's Why we Are The Best Placement Cell You will Come Across...</p>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- team member item -->
      <div class="col-md-3">
        <div class="team-item">
          <div class="team-image">
            <img src="images/pr1.jpg" class="img-responsive" alt="author">
          </div>
          <div class="team-text">
            <h3>Puja Sharma</h3>
            <div class="team-location">Rajasthan, India</div>
            <div class="team-position">– B.Tech Computer Science –</div>
            <p>Performed Web Design part of the project</p>
          </div>
        </div>
      </div>
      <!-- end team member item -->
      <!-- team member item -->
      <div class="col-md-3">
        <div class="team-item">
          <div class="team-image">
            <img src="images/pr1.jpg" class="img-responsive" alt="author">
          </div>
          <div class="team-text">
            <h3>xyz xyz</h3>
            <div class="team-location">Rajasthan, India</div>
            <div class="team-position">– B.Tech Computer Science –</div>
            <p>Designed the Tree Structure of the Project/website</p>
          </div>
        </div>
      </div>
      <!-- end team member item -->
      <!-- team member item -->
      <div class="col-md-3">
        <div class="team-item">
          <div class="team-image">
            <img src="images/pr1.jpg" class="img-responsive" alt="author">
          </div>
          <div class="team-text">
            <h3>Karishma Singh</h3>
            <div class="team-location">Rajasthan, India</div>
            <div class="team-position">– B.Tech Computer Science –</div>
            <P>Making Site responsive using Bootstrap & css</p>
          </div>
        </div>
      </div>
      <!-- end team member item -->
      <!-- team member item -->
      <div class="col-md-3">
        <div class="team-item">
          <div class="team-image">
            <img src="images/pr1.jpg" class="img-responsive" alt="author">
          </div>
          <div class="team-text">
            <h3>xyz zyx </h3>
            <div class="team-location">Rajasthan, India</div>
            <div class="team-position">– B.Tech Computer Science –</div>
            <p>Role of Database Linking And Maintaining was Performed</p>
          </div>
        </div>
      </div>
      <!-- end team member item -->
    </div>
  </div>
</section>
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-title">
          <h2>Contact Us</h2>
          <p>If you have some Questions or need Help! Please Contact Us!<br>We Help You with Your Journey for Becoming JOB Ready...</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <h3>Our Business Office</h3>
        <p>Jaipur Engineering College(JEC), Kukas, Jaipur, Rajasthan</p>
        <p><i class="fa fa-phone"></i> +91 9044427655</p>
        <p><i class="fa fa-globe"></i> <a href="https://www.jeckukas.org.in">https://www.jeckukas.org.in</a></p>
      </div>
      <div class="col-md-3">
        <h3>Business Hours</h3>
        <p><i class="fa fa-clock-o"></i> <span class="day">Weekdays:</span><span>9am to 8pm</span></p>
        <p><i class="fa fa-clock-o"></i> <span class="day">Saturday:</span><span>9am to 2pm</span></p>
        <p><i class="fa fa-clock-o"></i> <span class="day">Sunday:</span><span>Closed</span></p>
      </div>
      <div class="col-md-6">
        <form name="sentMessage" id="contactForm" novalidate="">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button type="submit" class="btn">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<p id="back-top">
  <a href="#top"><i class="fa fa-angle-up"></i></a>
</p>
<?php include 'footer.php'; ?>
  </body>
</html>
