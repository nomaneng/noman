<?php
	if (isset($_POST['head'])) {
	include "db.php";
	$head=$_POST['head'];
	$desc=$_POST['des'];
	$sql="INSERT INTO product_header(header,description) VALUES('$head','$desc')";
	if ($ss=$object->query($sql)===TRUE) {
		echo "Success";
	}else{
		echo $object->error;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Header</title>
	<style type="text/css">
		body{
			background: #E2B1DC;
		}
		.main{
			height: 700px;
			width: 600px;
			padding: 10px 30px;
			background: #fff;
			background: rgba(0,0,0,0.2);
			border-radius: 5px 5px;
			margin: auto;
			font-size: 20px;
		}
		.inp{
			height: 30px;
			width: 400px;
			margin-top: 40px;
			border-right: none;
			border-left: none;
			border-top: none;
			background: transparent;
			font-size: 16px;
		}
		h1{text-align: center;}
		.btn{
			height: 40px;
			width: 200px;
			background: #BBC;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="main">
		<h1>Product header Form</h1>
		<form method="post" action="#">
			header:
			<input class="inp" type="text" name="head"><br />
			Description:
			<textarea class="inp" name="des"></textarea><br />
			<br>
			<input class="btn" type="submit" name="" value="Save">
			
		</form>
	</div>

</body>
</html>