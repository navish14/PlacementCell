
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Login</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/Bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/Bootstrap.js">
    <link rel="stylesheet" href="sLoginStyle.css">

  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h1 class="text-center"> LOGIN </h1>
        <form class="" action="validate.php" method="post">
          <div class="input-group">
            <span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
            <input type="text"  class="form-control" name="user" placeholder="User Name">
          </div>
          <div class="input-group">
            <span class="input-group-addon"> <span class="glyphicon glyphicon-lock"></span></span>
            <input type="password"  class="form-control" name="password" placeholder="Password">
          </div>
          <!-- make a row for check box and forget password -->
          <div class="row">
            <div class="col-md-6">
              <input type="checkbox"> <small>Remember me</small>
            </div>
            <div class="col-md-6">
              <a href="#"><p class="text-right">Forget Password ?</p></a>
            </div>
          </div>
          <!-- close -->
          <div> <input class="btn btn-danger" type="submit" name="login" value="Login"></div>
        </form>
        <div class="row btn-sub">
          <div class="col-md-3"> </div>
            <div class="col-md-9">
                  <?php
                  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                  if (strpos($fullUrl, "signin=fail") == true) {
                    echo "<p style='color:red; font-size:20px;'> *Wrong UserName Or Password </p>";
                  }

                  if (strpos($fullUrl, "reg=success") == true) {
                    echo "<p style='color:lightgreen; font-size:20px;'> *Registered successfully </p>";
                  }
                  

                 ?>
            </div>
        </div>
          <h5 class="text-center">OR</h5>
          <!-- make social login -->
          <div class="row">
            <div class="col-md-6">
              <a href="cRegForm.php"><div class="btn btn-primary">Register-Company</div></a>
            </div>
            <div class="col-md-6">
              <a href="sRegForm.php"><div class="btn btn-info">Register-Student</div></a>
            </div>

          </div>
          <!-- -->
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
