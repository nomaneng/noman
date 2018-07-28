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
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
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
	<img class="img" src="images/c1.jpg">
	<a class="tir" href="#"><img src="images/main.png"></a>
	<p class="p1"><b>CONTACT US</b></p>
	<div class="main">
	<h1>Get In Touch</h1>
		<form method="post" action="database/forminsert.php">
			<input class="inp" type="text" name="name" placeholder=" Name">
			<input class="inp" type="Email" name="email" placeholder=" Email"><br /><br />
			<input class="inp2" type="text" name="subject" placeholder=" Subject"><br /><br />
			<textarea class="mass" name="message" placeholder=" Message"></textarea><br/> <br />
			<input class="btn2" type="submit" name="" value="Send Message">

		</form>
	</div>
	<div class="contact">
		<?php
			$sql="SELECT * FROM contacts ORDER BY id DESC LIMIT 3";
			$ss=$object->query($sql);

		?>
		<h1>Contact Information</h1>
		<table>
			<?php
			while ($data=$ss->fetch_assoc()) {
			?>
			<tr>
				<td><img class="icon" src="database/img/<?php echo $data['picture']; ?>"></td>
				<td><?php echo $data['address']; ?></td>

			</tr>
			<?php
		}
			?>
			<!--<tr>
				<td><img class="icon" src="images/icon2.png"></td>
				<td>nomansardar01762666325@gmail.com</td>
				
			</tr><tr>
				<td><img class="icon" src="images/icon3.png"></td>
				<td>Sardarcomputer.com</td>
				
			</tr>
			</tr><tr>
				<td><img class="icon" src="images/icon3.png"></td>
				<td>Sardarcomputer.com</td>
				
			</tr> -->
		</table>
		
	</div>
	<section class="subscrib">
		<p>NEWSLETTER <br>Just stay tune for our latest Product. Now you can subscribe</p><br />
		<form method="post" action="#">
		<input class="inp3" type="E-mail" name="email" placeholder="Enter E-mail">
		<input class="sub2" type="submit" name="" value="SUBSCRIBE">
		</form>	
	</section>
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