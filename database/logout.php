<?php
	session_start();
	session_unset();
	session_destroy();
	setcookie("user", "", time()-36, "/");
	header("LOCATION:loginform.php");

?>