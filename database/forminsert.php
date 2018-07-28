<?php
	include "db.php";

	$name=$_POST['name'];
	$mail=$_POST['email'];
	$sub=$_POST['subject'];
	$massage=$_POST['message'];
	$sql="INSERT INTO contact(name,email,subject,mass) VALUES('$name','$mail','$sub','$massage')";
	if ($que=$object->query($sql)===TRUE) {
		echo "Success....";
	}else{
		echo $object->error;
	}


?>