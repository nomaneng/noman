<?php
	include "database/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<link rel="stylesheet" type="text/css" href="css/product.css">
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
	<?php
		$sql="SELECT * FROM product_main_picture ORDER by id DESC LIMIT 1";
		$ss=$object->query($sql);
		while ($data=$ss->fetch_assoc()) {
	?>
	<img class="img" src="database/main_picture/<?php echo $data['photo'] ?>">
	<?php
		}
	?>
	<a class="tir" href="#"><img src="images/main.png"></a>
	<p class="p1"><b>PRODUCT</b></p>
	<?php  
		$sql="SELECT * FROM product_header ORDER BY id DESC LIMIT 3";
		$ss=$object->query($sql);
		while ($data=$ss->fetch_assoc()) {
	?>
	<div class="header">
		<h2><?php echo $data['header']; ?></h2>
		<p><?php echo $data['description']; ?></p>
	</div>
	<?php
		}
	?>
	<?php
		$sql="SELECT * FROM product_image ORDER by id DESC LIMIT 12";
		$ss=$object->query($sql);
		while ($data=$ss->fetch_assoc()) {
	?>
	<div class="picture">
		<img src="database/product_photo/<?php echo $data['photo'] ?>">
		<h3><?php echo $data['caption'] ?></h3>
		<span>$<?php echo $data['taka'] ?></span> <br />
		<a class="bb" href="database/buy.php?id=<?php echo $data['id'] ?>">Click here to buy</a>

	</div>
	<?php
		}
	?>
	<!--<div class="picture">
		<img src="images/FB_IMG_15246410998510958.jpg">
		<h3>Get the best of Iphone6 With the fota update</h3>
		<span>$11000</span>
	</div>
	<div class="picture">
		<img src="images/FB_IMG_15246411513061596.jpg">
		<h3>Get the best of Iphone6 With the fota update</h3>
		<span>$850</span>
	</div>
	<div class="picture">
		<img src="images/FB_IMG_15246411116722935.jpg">
		<h3>Get the best of Iphone6 With the fota update</h3>
		<span>$900</span>
	</div> -->
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