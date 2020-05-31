<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Company Registration</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/Bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/Bootstrap.js">
    <link rel="stylesheet" href="RegStyle.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <form class="cformreg" action="cregister.php" method="post">
      <div class="row btn-sub">
        <div class="col-md-3"> </div>
          <div class="col-md-9">
                <?php
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if (strpos($fullUrl, "reg=fail") == true) {
                  echo "<p style='color:red; font-size:20px;'> *Registration Not Completed</p>";
                }
                if (strpos($fullUrl, "user=exist") == true) {
                  echo "<p style='color:red; font-size:20px;'> *UserName Taken</p>";
                }

               ?>
          </div>
      </div>
    <div class="row">
      <h1 class="text-left">Company Registration Form</h1>
      <div class="col-md-8">
        <!-- make a row for every label -->
        <div class="row">
          <label class="label col-md-3 control-label">User Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="Uname" placeholder="User Name" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Password</label>
          <div class="col-md-9">
            <input type="password" class="form-control" name="Pass" placeholder="Password" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Company Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="cName" placeholder="Company Name" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Established</label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="estY" placeholder="in the Year">
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Email</label>
          <div class="col-md-9">
            <input type="Email" class="form-control" name="email" placeholder="xyz@jec.com" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Contact</label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="contact" placeholder="Phone/Mobile" >
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">HR Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="hrName" placeholder="HR-Name">
          </div>
        </div>

        <div class="row btn-sub">
          <div class="col-md-3"></div>
          <div class="col-md-9"><input type="submit" class="btn btn-danger" name="submit" value="Register">
          </div>
        </div>

        <!-- close -->
      </div>
      <div class="col-md-4"></div>
    </div>
    </form>
    <?php include 'footer.php'; ?>
  </body>
</html>
