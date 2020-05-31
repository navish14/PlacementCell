<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Registration</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/Bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/Bootstrap.js">
    <link rel="stylesheet" href="RegStyle.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <form class="sformreg" action="register.php" method="post">
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
      <h1 class="text-left">Student Registration Form</h1>

      <div class="col-md-8">
        <!-- make a row for every label -->
        <div class="row">
          <label class="label col-md-3 control-label">User Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="sUname" placeholder="User Name" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Password</label>
          <div class="col-md-9">
            <input type="password" class="form-control" name="sPass" placeholder="Password" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Your Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="sName" placeholder="Full Name" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Father's Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="sFName" placeholder="Father's Name" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Age</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="sAge" placeholder="Age" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">DOB</label>
          <div class="col-md-9">
            <input type="date" class="form-control" name="sDob" placeholder="Birthdate" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Gender</label>
          <div class="col-md-9">
            <select class="form-control select" name="sGender">
              <option value="F">Female</option>
              <option value="M">Male</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Email</label>
          <div class="col-md-9">
            <input type="email" class="form-control" name="sEmail" placeholder="xyz@jec.com" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Contact</label>
          <div class="col-md-9">
            <input type="number" class="form-control" name="sContact" maxlength="10" placeholder="Mobile No." required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">City</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="sCity" placeholder="City" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">School Name (Matric)</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="sSchoolNameM" placeholder="Matric" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">School Name (HSC)</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="sSchoolNameH" placeholder="HSC" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">College Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="sCollegeName" placeholder="College Name" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Stream</label>
          <div class="col-md-9">
            <select class="form-control select" name="sStream">
              <option value="Select">Select</option>
              <option value="Commerce">Commerce</option>
              <option value="Science">Science</option>
              <option value="Arts">Arts</option>
            </select>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Qualifications (%)</label>
          <div class="col-md-3">
            <input type="number" class="form-control" name="matric" placeholder="In Matric" required>
          </div>
          <div class="col-md-3">
            <input type="number" class="form-control" name="hsc" placeholder="In HSC" required>
          </div>
          <div class="col-md-3">
            <input type="number" class="form-control" name="college" placeholder="In College" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Year of Passing</label>
          <div class="col-md-3">
            <input type="number" class="form-control" name="matricY" placeholder="Matric" required>
          </div>
          <div class="col-md-3">
            <input type="number" class="form-control" name="hscY" placeholder="HSC" required>
          </div>
          <div class="col-md-3">
            <input type="number" class="form-control" name="collegeY" placeholder="College" required>
          </div>
        </div>
        <div class="row">
          <label class="label col-md-3 control-label">Other Qualifications</label>
          <div class="col-md-9">
            <textarea class="form-control" name="otrQ" rows="6" cols="80" placeholder="Like Diploma, Vocational Certificates..."></textarea>
          </div>
        </div>

        <div class="row btn-sub">
          <div class="col-md-3"></div>
          <div class="col-md-9"><input type="submit" class="btn btn-danger" name="submit" value="Submit">
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
