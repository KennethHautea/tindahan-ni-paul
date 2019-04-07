<?php
	if(isset($_POST["submit"])){
		$supid = $_POST["supid"];
		$supname= $_POST["supname"];
		$supnum = $_POST["supnum"];
		$supaddress= $_POST["supaddress"];
		if($supid && $supname && $supnum && $supaddress){
			$insertquery= mysqli_query($db,"Insert into suppliers($sup_Id, $sup_Name, $location, $contact_Number) values('$supid','$supname','$supnum','$supaddress')");


	}
}
?>