<?php 
	if(isset($_POST["btnSubmit"])){
		$txtUname = $_POST["uname"];

		if($txtUname == ""){
			echo "Enter Username";
		}
	}
?>