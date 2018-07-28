<?php
	include "database/db.php";
	if (isset($_POST['email'])) {
    $email=$_POST['email'];
    $sql="INSERT INTO subscribed(subscribe) VALUES('$email')";
    if ($a=$object->query($sql)===TRUE) {
        echo "Success....";
    }else{
        echo $object->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
	<ul class="navbar">
		<h2>SHOP.</h2>
		<div class="link">
		<li><a href="index.php">HOME</a></li>
		<li><a href="product.php">SHOP</a></li>
		<li><a href="contact.php">CONTACT</a></li>
        <li><a href="about.php">ABOUT</a></li>
		</div>
		<input class="btn" type="submit" value="search">
		<input class="input" type="search" name="search" placeholder="Search">
		
	</ul>
	<img class="img" src="images/1.jpg">
	<a class="tir" href="#"><img src="images/main.png"></a>
	<p class="p1"><b>ABOUT US</b></p>
	<div class="mobile">
		<?php
		$sql="SELECT * FROM company_image ORDER BY id DESC LIMIT 1";
		$ss=$object->query($sql);
		while ($data=$ss->fetch_assoc()) {
		?>
		<img src="database/Company_photo/<?php echo $data['photo'] ?>">
		<p><?php echo $data['title']; ?></p>
		<?php
			}
		?>
	</div>
	<section class="company">
		<?php 
			$sql="SELECT * FROM company_history ORDER BY id DESC LIMIT 1";
			$ss=$object->query($sql);
			while ($data=$ss->fetch_assoc()) {
		 ?>
		<p><b>Company History</b><br/><br/><?php echo $data['history']; ?></p><br /><br />
		<p><b>Mission & Vission</b><br /><br/><?php echo $data['mission']; ?></p>
		<?php
			}
		?>
	</section>
	<div class="meet">
		<p>PRODUCTIVE STAFF</p>
		<h2>MEET OUR TEAM</h2>
		<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit<br/> ab aliquam dolor eius.</p>
		
	</div>
	<?php
			$sql="SELECT * FROM team_image ORDER BY id DESC LIMIT 3";
			$ss=$object->query($sql);
			while ($data=$ss->fetch_assoc()) {
	?>
	<div class="team1">
		<img src="database/Team_photo/<?php echo $data['photo']; ?>"><br/>
		<p><?php echo $data['title']; ?><br /><?php echo $data['occapation']; ?></p>
		<p><a href="#"><?php echo $data['email']; ?></a></p>
	</div>
	<?php
		}
	?>
	<!--<div class="team1">
		<img src="images/m2.jpg"><br/>
		<p>Noman Sardar<br>Co-Owner</p>
		<p><a href="#">E-mail</a></p>
	</div>
	<div class="team1">
		<img src="images/m2.jpg"><br/>
		<p>Mynul Islam<br>Chief Executive Officer</p>
		<p><a href="#">E-mail</a></p>
			
	</div>	-->
	<div class="subscribs">
		<p>NEWSLETTER <br>Just stay tune for our latest Product. Now you can subscribe</p><br />
		<form method="post" action="#">
		<input class="inp" type="E-mail" name="email" placeholder="Enter E-mail">
		<input class="sub" type="submit" name="" value="SUBSCRIBE">
		</form>
	</div>
	<div class="footers">
    	<table style="width:40%">
    		<tr>
    			<td>About</td>
    			<td>Shop</td>
    			<td>Find Desiginer</td>
    		</tr>
    		<tr>
    			<td>Help</td>
    			<td>Privacy</td>
    			<td>Find Designers</td>
    		</tr>
    		<tr>
    			<td>Contact</td>
    			<td>Handbook</td>
    			<td>Advertise</td>
    		</tr>
    		<tr>
    			<td>Meetups</td>
    			<td>Testimonials</td>
    			<td>Teams</td>
    		</tr>
    		<tr>
    			<td>Shop</td>
    			<td>Held Desk</td>
    			<td>API</td>
    		</tr>
    	</table>
    	<h2>SHOP.</h2>
    	<p>Facilis ipsum reprehenderit nemo molestias. <br/>Aut cum mollitia reprehenderit. Eos cumque dicta <br />adipisci architecto culpa amet.</p>
    	<span>Created:@Md Noman Sardar<br>Designed by FreeHTML5.co </span>
    	
    </div>
</body>
</html>