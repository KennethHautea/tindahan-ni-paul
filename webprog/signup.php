<?php 
  session_start();
  include("php/checker_signup.php"); 
?>>
<html>
<head>
	<!--css bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/alert.css">
	<!--jquery bootstrap-->
	<script src="js/jquery-3.2.1.min.js"></script>

	<!--js bootstrap-->
	<script src="js/bootstrap.min.js"></script>
	<title>Welcome To NickAutomatic Shop</title>
</head>
<body>
	<?php include ("navbar.php"); ?>
  <div class="spacer">    
   <div class="container">
    <h2>SIGN UP</h2>
    <p>Please fill in this form to create an account.</p>
      <form class="form-horizontal" action="signup.php" method="POST">
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name <span class="error">*</span></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Enter Your Name" name="name" >
            <div class="error">
              <?php include("php/name_verify.php"); ?>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="uname">Email <span class="error">*</span></label>
          <div class="col-sm-8">
            <input type="email" class="form-control" placeholder="Enter Email" name="email" >
            <div class="error">
              <?php include("php/email_verify.php"); ?>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="uname">Username <span class="error">*</span></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Enter Username" name="uname">
            <div class="error">
              <?php include("php/uname_verify.php"); ?>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password <span class="error">*</span></label>
          <div class="col-sm-8">          
            <input type="password" class="form-control" placeholder="Enter password" name="password" >
            <div class="error">
              <?php include("php/password_verify.php"); ?>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-3">
            <div class="checkbox">
              <label> <input type="checkbox" name="remember" value="<?php if(isset($_POST['remember'])) {echo $_POST['txtusername'];} ?>"> Remember me</label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-3">
            <button type="submit" name="btnSubmit" class="btn">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

	<?php include ("footer.php");?>
</body>
</html>