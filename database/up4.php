<?php
	include "db.php";
	$name=$_POST['name'];
	$meal=$_POST['mail'];
	$phone=$_POST['phone'];
	$code=$_POST['code'];
	$col=$_POST['col'];
	$quan=$_POST['quantity'];
	$takas=$_POST['takas'];
	$adds=$_POST['add'];
	$con=$_POST['con'];
	$id=$_POST['id'];
	$sql = "UPDATE product_buy SET name='$name', gmail='$meal', phone='$phone', rcode='$code', colour='$col', quentity='$quan', price='$takas', address='$adds', confirm='$con' WHERE id='$id'";

	if ($object->query($sql)===TRUE) {
		header('location:up1.php');
	}else{
		echo $object->error;
	}

?>