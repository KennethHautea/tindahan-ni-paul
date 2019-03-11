<?php
include("config.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>sad</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<div class="col-md-10">
		<div class="jumbotron">
			<h3 class="text-center">DVOIS</h3>
			<form method="POST" action="proccess.php">
				
				<div class="form-group input-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" placeholder="username" >
				</div>
				<div class="form-group input-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="password" >
				</div>
				<div class="btn-group">
					<button class="btn btn-success" name="login">Submit</button> 
				</div>
			</form>
		</div>
	</div>
	
</div>


</body>
</html>