<?php
include("config.php");

if(isset($_POST["login"])){
	if(empty($_POST["username"])|| empty($_POST["password"])){
		header("location:index.php?login=Empty");
		exit();
	}else{
		$user  = $_POST["username"];
		$pass = $_POST["password"];
	}
	if($_POST["username"]||$_POST["password"]){
		header("location:dashboard.php");
	}
}
?>