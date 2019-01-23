<?php

include("config.php");

$username = $password = "";
$usernameErr = $passwordErr = "";

//validate the user input
if(isset($_POST["btnSubmit"])){
	if(empty($_POST["username"])){
		$usernameErr = "username empty! ";		
	}else{
		$username = $_POST["username"];	
	}
	if(empty($_POST["password"])){
		$passwordErr = "password empty! ";		
	}else{
		$password = $_POST["password"];	
	}

	//if naay sulod ang duha
	if($username && $password){

		//kuhaon niya sa sulod sa database
		$check_email = mysqli_query($connection,"SELECT * FROM userlogin WHERE username = '$username'" );
		$check_email_row = mysqli_num_rows($check_email);
		
		if($check_email_row > 0){
			$row = mysqli_fetch_assoc($check_email);
			$db_password = $row["password"];
			$db_username = $row["username"];
			$user_id = $row["user_id"];
			
			//if ang password ug username equal sa input
			if($password ==$db_password){
					header("location:inventory.php");
				}else{
				$passwordErr = "Password is incorrect!";
			}

		}else{
			$usernameErr = "username is incorrect!";
		}
	}
}

?>
<style type="text/css">
	.error{
		color:red;
	}
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>

<form method="POST">
<table border="0" width="10%">
	<tr><td><hr></td></tr>
	<tr>
		<td><center>Username</center><input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username"><span class="error"><?php echo $usernameErr;?></span></td>

	</tr>
	<tr><td><hr></td></tr>
	<tr>
		<td><center> Password</center> <input type="password" name="password" value="" placeholder="Password"><span class="error"><?php echo $passwordErr;?></span></td>
	</tr>

	<tr>
		<td><center><input type="submit" name="btnSubmit" value="Login"></center></td>
	</tr>
	<tr><td><hr></td></tr>
</table>
</form>
</center>
