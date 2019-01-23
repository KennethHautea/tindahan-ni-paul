<?php 
	if(isset($_SESSION["Name"])){
		echo "<h3>Welcome </h3>".$_SESSION["Name"];
	} else {
		echo "<h3>Welcome Guest</h3>";
	}
?>