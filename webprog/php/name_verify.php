<?php 
	if(isset($_POST["btnSubmit"])){
		$txtname = $_POST["name"];

		if($txtname == ""){
			echo "Enter Name";
		}
	}
?>