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
	$sql="INSERT INTO product_buy(name,gmail,phone,rcode,colour,quentity,price,address) VALUES('$name','$meal','$phone','$code','$col','$quan','$takas','$adds')";
	if ($a=$object->query($sql)===TRUE) {
		echo "Success";
	}else{
		echo $object->error;
	}

?>