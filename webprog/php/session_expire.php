<?php
	session_start();
	$expireAfter = 20;

if(isset($_SESSION['last_action'])){
    $secondsInactive = time() - $_SESSION['last_action'];
    $expireAfterSeconds = $expireAfter * 60;

    if($secondsInactive >= $expireAfterSeconds){
        session_unset();
        session_destroy();
    }
    
}
$_SESSION['last_action'] = time(); 
?>