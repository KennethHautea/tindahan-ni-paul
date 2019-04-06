<?php
require_once('config.php');
$user = $pass = "";
$userErr= "";
if(isset($_POST["login"])){
	if(empty($_POST["username"])|| empty($_POST["password"])){
		$userErr = "user and password is Empty or Invalid";
	}else
	{
		$user  = $_POST["username"];
		$pass = $_POST["password"];
	}
	}
?>