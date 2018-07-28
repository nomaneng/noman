<?php
	session_start();
	include "db.php";
	$users=$_POST['use'];
	$pass=$_POST['pass'];
	$sql="SELECT * FROM login WHERE user='$users'";
	$ss=$object->query($sql);
	if ($ss->num_rows>0) {
		while ($data=$ss->fetch_assoc()) {
			$pas=$data['pass'];
			$name=$data['user'];

		}if ($pas===$pass) {
			$_SESSION['noman']=$name;
			setcookie("user", "hello", time()+3600, "/");
			header("LOCATION:main.php");
		}else{
			echo "Password Incorrect";
		}
	}else{
		echo "Incorrect Username";
	}


?>