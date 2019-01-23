<?php 
	if(isset($_POST["btnSubmit"])){
		$txtemail = $_POST["email"];

		if(empty($_POST["email"])){
			echo "Enter Email Address";
		} elseif (!filter_var($txtemail, FILTER_VALIDATE_EMAIL)) {
    		}
		
	}
?>