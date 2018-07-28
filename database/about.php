<?php
	if (isset($_POST['n'])) {
		include "db.php";
		$about=$_POST['n'];
		$sql="INSERT INTO about(about) VALUES('$about')";
		if ($object->query($sql)===TRUE) {
			echo "Success";
		}else{
			echo $object->error;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<style type="text/css">
		body{
			background-color: #12BABC;
			background-size: cover;
			background-repeat: no-repeat;
		}
		.main{
			background: #abccb1;
			height: 600px;
			width:	400px;
			margin: auto;
			font-size: 25px;
			color: #fff;
			padding: 10px 50px;
		}
		.inp{
			height: 30px;
			width: 250px;
			background: transparent;
			border-left: none;
			border-top: none;
			border-right: none;
			font-size: 25px;

		}
		.btn{
			height: 40px;
			width: 200px;
			background: #12ccaa;
			border-radius: 15px 15px;
			margin-top: 30px;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="main">
		<h1>About Form</h1>
		<form method="post" action="#">
			About:
			<textarea class="inp" name="n" placeholder="About" required="Empty form"></textarea>
			<input class="btn" type="submit" name="" value="save">
		</form>
	</div>

</body>
</html>