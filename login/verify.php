<?php
session_start();

if(!isset($_session["user_id"])){
	echo"login in youre soul";
	
}else{
	echo"youre not login";
}
	
?>