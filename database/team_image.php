<?php
	if (isset($_POST['cap'])) {
	include "db.php";
	$title=$_POST['cap'];
	$occp=$_POST['occ'];
	$mail=$_POST['mail'];
	$dir="Team_photo/";
	$photo=$_FILES['pic1']['name'];
	$target=$dir.basename($photo);
	if (move_uploaded_file($_FILES['pic1']['tmp_name'], $target)) {
		$s="INSERT INTO team_image(photo,title,occapation,email) VALUES('$photo','$title','$occp','$mail')";
		if ($ss=$object->query($s)===TRUE) {
			echo "Success";
				}else{
					echo $object->error;
				}
			}else{
				echo "Failed";
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background: #E6B7F8;
		}
		.pic{
			height: 600px;
			width: 200px;
			background-color: #fff;
			background: rgba(0,0,0,0.2);
			margin: auto;
			padding: 20px 70px;
			font-size: 15px;
			color: #fff;
		}
	</style>
</head>
<body>
	<div class="pic">
		<h2>Picture Input Form</h2>
	<form method="post" action="#" enctype="multipart/form-data">
		Enter Name:
		<input type="text" name="cap"><br />
		Occapation:
		<input type="text" name="occ">
		Social Pack name:
		<input type="E-mail" name="mail">
		Picture1:<br />
		<input type="file" name="pic1"><br />
		<input type="submit" name="" value="Save">
	</form>
	</div>

</body>
</html> 