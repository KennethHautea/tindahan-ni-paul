<?php 
	if(isset($_POST["btnSubmit"])){
		$txtPassword = $_POST["password"];

		if($txtPassword == ""){
			echo "Enter Password";
		}
	}
?>