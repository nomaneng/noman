<?php
	session_start();
	include "db.php";
	if (!isset($_COOKIE['user'])) {
		header("LOCATION:loginform.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<style type="text/css">
		body{
			background-color: #94F4BD;
		}
		.data{
			height: 40px;
			width: 100px;
			background-color: green;
			font-size: 20px;
			padding: 10px 20px;
			margin: 0;
			text-decoration: none;
			color: #fff;
		}
		.logout{
			height: 40px;
			width: 100px;
			background-color: green;
			font-size: 25px;
			padding: 10px 20px;
			margin: 0;
			text-decoration: none;
			color: #fff;
			display: inline-block;
			margin-top: 400px;
			border-radius: 7px 10px;
		}
		.logout:hover{
			background: red;
			transition: 0.5s all ease;
		}
		.main{
			height: 600px;
			width: 960px;
			background-color: #fff;
			font-size: 20px;
			padding: 10px 20px;
			margin: auto;
			background: rgba(0,0,0,0.1);
		}
		.main li{
			display: inline-block;
			
		}
		.main li a:hover{
			background: #AB00BB;
			color: #fff;
			transition: 0.5s all ease;
		}
		.main li a{
			height: 50px;
			width: 120px;
			padding: 10px 25px;
			background: #AACb12;
			border-radius: 7%;
			text-align: center;
			text-decoration: none;
			font-size: 20px;
		}
	</style>

</head>
<body>
	<div class="main">
		<?php echo "Welcome to ".$_SESSION['noman']."<br />"."<br />"."<br />"; ?>
		<li><a href="imgform.php">contact</a></li>
			<li><a href="php_about.php">About</a></li>
			<li><a href="php_product.php">Shop</a></li>
			<li><a href="php_main.php">Home</a></li>
			<li><a href="up1.php">Product Sale Page</a></li><br />
		<a class="logout" href="logout.php">Logout</a>
	</div>
</body>
</html>
