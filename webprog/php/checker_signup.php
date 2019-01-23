<?php 
	if(isset($_POST["btnSubmit"])){
		$txtUname = $_POST["uname"];
		$txtPassword = $_POST["password"];
		$txtname = $_POST["name"];
		$txtemail = $_POST["email"];

		if($txtUname != ""){
			if($txtPassword != ""){
				if($txtname != ""){
					if($txtemail != ""){
						$_SESSION["Name"] = $_POST["name"];
						header("location: index.php");
					}
				}		
			}
		}

	}
?>