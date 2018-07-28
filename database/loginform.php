<?php
	session_start();
	if (isset($_COOKIE['user'])) {
		header("LOCATION:main.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style type="text/css">
		body{
			background: url(img/img.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;

		}
		.main{
			height: 450px;
			width: 350px;
			background-color: #fff;
			background: rgba(0,0,0,0.2);
			margin: auto;
			margin-top: 100px;
			padding: 20px 60px;
		}
		.inp{
			height: 30px;
			width: 330px;
			background-color: transparent;
			border-top: none;
			border-right: none;
			border-left: none;
			font-size: 20px;
			color: #fff;
		}
		.pra{
			font-size: 20px;
			color: #fff;
		}
		.img{
			height: 90px;
			width: 90px;
			margin-left: 150px;
			margin-top: -50px;
		}
		h1{
			text-align: center;
			color: #fff;
		}
		.btn{
			height: 50px;
			width: 300px;
			background-color: #636EFE;
			color: #fff;
			margin-top: 30px;
			border-radius: 10px 10px;
			font-size: 20px;
		}
		.btn:hover{
			background-color: red;
		}
		.tag{
			color: #fff;
			text-decoration: none;
			margin-left: 200px;
		}
	</style>
</head>
<body>
	<div class="main">
		<img class="img" src="img/149071.png">
		<h1>Login Form</h1>
		<form method="post" action="logininsert.php">
		<p class="pra">Username</p>
		<input class="inp" type="text" name="use" placeholder="Username" required=""><br />
		<p class="pra">Password</p>
		<input class="inp" type="password" name="pass" placeholder="Password" required=""><br />
		<input class="btn" type="submit" name="" value="Login"><br /><br />
		</form>
		<a class="tag" href="account.php">Create a New Account</a>
		
	</div>

</body>
</html>
