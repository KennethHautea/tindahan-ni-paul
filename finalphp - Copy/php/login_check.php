<?php 
	if(isset($_POST["btnSubmit"])){
		$txtUname = $_POST["uname"];
		$txtPassword = $_POST["password"];

		if($txtUname != ""){
			if($txtPassword != ""){
				$_SESSION["Name"] = $_POST["uname"];
				header("location: index.php");
				
			}
		}

	}
?>