<?php
  session_start();
  include("php/login_check.php");
?>

<html>
<head>
	<title>Optical Sales and Inventory Management</title>
  <!--css bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mystyle.css">
  <!--javascript-->
  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <div class="fadeIn first">
        <img src="img/user-logo.png" id="icon" alt="User Icon" />
      </div>
      <form class="form-signin" method="post">
        <input type="text" id="username" class="fadeIn second" name="uname" placeholder="Enter Username" required>
        <input type="text" id="password" class="fadeIn third" name="password" placeholder="Enter Password" required>
        <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    </div>
  </div>
</body>
</html>