<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "dvois";
$db = mysqli_connect("$host","$user","$password","$db_name");

if(mysqli_connect_errno()){
	echo "Your fucking database connection error bitch".mysqli_connect_error();
	die();
}
?>