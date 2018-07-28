<?php
	if (isset($_POST['mail'])) {
		include "db.php";
		$fast=$_POST['fast'];
		$last=$_POST['last'];
		$father=$_POST['father'];
		$collage=$_POST['collage'];
		$gmail=$_POST['mail'];
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$sql="INSERT INTO login(fast,last,father,collage,Email,user,pass) VALUES('$fast','$last','$father','$collage','$gmail','$user','$pass')";
		if ($ss=$object->query($sql)===TRUE) {
			echo "Success";
		}else{
			echo "Not Success".$object->error;
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<style type="text/css">
		body{
			background: #FDBDBD;
			background-size: cover;
			background-attachment: fixed;
			background-repeat: no-repeat;
		}
		.main{
			height: 500px;
			width: 900px;
			background: #fff;
			background: rgba(0,0,0,0.1);
			margin: auto;
			padding: 20px 60px;
					}
		h1{
			text-align: center;
		}
		.inp{
			height: 30px;
			width: 400px;
			background-color: transparent;
			border-top: none;
			border-left: none;
			border-right: none;
			font-size: 15px;
			color: #fff;
		}
		.inp:hover{
			width: 700px;
			transition: 0.3s all ease;
		}
		.btn{
			height: 40px;
			width: 150px;
			font-size: 20px;
			border-radius: 10px 10px;
			background-color: #70CDF8;
		}
		.btn:hover{
			background-color: red;
		}
		table{
			font-size: 20px;
			color: #fff;
		}
	</style>
</head>
<body>
	<div class="main">
		<h1>Create a new Account</h1>
		<form method="post" action="#">
			<table>
				<tr>
					<td>First Name:</td>
					<td><input class="inp" type="text" name="fast" placeholder="Enter Fast Name" required=""></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input class="inp" type="E-mail" name="last" placeholder="Enter Last Name" required=""></td>
				</tr>
				<tr>
					<td>Father Name:</td>
					<td><input class="inp" type="text" name="father" placeholder="Enter Father Name" required=""></td>
				</tr>
				<tr>
					<td>Collage or school Name:</td>
					<td><input class="inp" type="text" name="collage" placeholder="Enter a Collage" required=""></td>
				</tr>
				<tr>
					<td>E-mail:</td>
					<td><input class="inp" type="E-mail" name="mail" placeholder="Enter a E-mail" required=""></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input class="inp" type="text" name="user" placeholder="Enter a New Username" required=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input class="inp" type="Password" name="pass" placeholder="Enter a New Password" required=""></td>
				</tr>
			</table>
			<input class="btn" type="submit" name="" value="Save">
			
		</form>
		
	</div>


</body>
</html>