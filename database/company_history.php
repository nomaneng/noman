<?php
	if (isset($_POST['history'])) {
	include "db.php";
	$history=$_POST['history'];
	$mission=$_POST['mission'];
	$sql="INSERT INTO company_history(history,mission) VALUES('$history','$mission')";
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
	<title>Company History</title>
	<style type="text/css">
		body{
			background: #B7F8E9;
		}
		.main{
			height: 700px;
			width: 700px;
			background: #fff;
			margin: auto;
			font-size: 20px;
			background: rgba(0,0,0,0.2);
			padding: 10px 30px;
		}
		.inp{
			height: 60px;
			width: 400px;
			font-size: 20px;
			background: transparent;
			border-right: none;
			border-left: none;
			border-top: none;
		}
		h1{
			text-align: center;
		}
		.btn{
			height: 50px;
			width: 150px;
			font-size: 20px;
			background: #AABBCc;
		}
	</style>
</head>
<body>
	<div class="main">
		<h1>Company History Form</h1>
		<form method="post" action="#">
		Company history:
		<textarea class="inp" name="history"></textarea><br/>
		Mission & Vission:
		<textarea class="inp" name="mission"></textarea><br/><br/>
		<input class="btn" type="submit" name="" value="Save">
	</form>
	</div>

</body>
</html>