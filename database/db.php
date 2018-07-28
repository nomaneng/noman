<?php
	$host="localhost";
	$user="root";
	$pass="";
	$dba="noman";
	$object=new mysqli($host,$user,$pass,$dba);
	if ($object->connect_error) {
		echo "Not Connected";
	}
?>