<?php
	include "db.php";
		$id = $_GET['id'];
		$sql = "DELETE  FROM product_buy WHERE id = '$id'";
		if($object->query($sql)===TRUE)
		{
			header("location:up1.php");
			
		}else{
			echo $con->error;
		}
?>