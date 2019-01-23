<?php
$host="localhost";
$user="root";
$password="";
$db_name="opticalclinic";

$connection = mysqli_connect("$host","$user","$password","$db_name");

if(mysqli_connect_errno()){
	echo "Your fucking database have a connection error bitch".mysqli_connect_error();
	die();
}
?>