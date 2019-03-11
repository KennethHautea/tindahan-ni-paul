<?php
require_once('config.php');
if(isset($_POST["login"])){
	
	if(empty($_POST["username"]) || empty($_POST["password"])){
		header("location:index.php?Empty = Please fill in the blanks nigga");
		
	}
}else
echo "sdsadasd";

?>