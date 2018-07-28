<?php
	include "db.php";
	if (isset($_POST['quantity'])) {
	$item=$_POST['quantity'];
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>buy</title>
	<link rel="stylesheet" type="text/css" href="buy.css">
</head>
<body bgcolor="#fff">
	<ul class="navbar">
		<h2>SHOP.</h2>
		<div class="link">
		<li><a href="1stproject/..database/index.php">HOME</a></li>
		<li><a href="1stproject/about.php">ABOUT</a></li>
		<li><a href="1stproject/product.php">SHOP</a></li>
		<li><a href="1stproject/contact.php">CONTACT</a></li>
		</div>
		<input class="btn" type="submit" value="search">
		<input class="input" type="search" name="search" placeholder="Search">
		
	</ul>
	<div class="main">
		<?php
		$b=0;
		$id = $_GET['id'];
		$sql = "SELECT * FROM main_product_photo WHERE id='$id'";
		$result = $object->query($sql);
		while ($data = $result->fetch_assoc()) {
			$b=$data['taka'];

	?>
		<h1><?php echo $data['caption'] ?> do you want to buy</h1>
		 <p>01762666325 you pay do your money on this number. <br /> if you can not send the price of the product within <br />30 minutes,then you are not sure.<br>Type:<u>Bkash Number:01762666325(personal)</u></p>
		 <p class="taka">Price: $<?php echo $data['taka']; ?> </p><br /> <br />
		 <div class="picture">
		 	<img src="home_product_photo/<?php echo$data['photo']; ?>">
		 	<p><?php echo $data['caption']; ?></p>
		 </div>
		 <form method="post" action="#buymain">
		 	
		 	Quantity:<br />
		 	<select class="item" name="quantity">
		 		<option value="1">1</option>
		 		<option value="2">2</option>
		 		<option value="3">3</option>
		 		<option value="4">4</option>
		 		<option value="5">5</option>
		 		<option value="6">6</option>
		 		<option value="7">7</option>

		 	</select><br />
		 	<input type="hidden" name="id" value="<?php echo $id ?>">
		 	<input class="btn1" type="submit" name="" value="Send Now">
		 </form>

		 <span id="buymain">
		 	<p class="code">reference code is: <?php echo $a= rand(1000,9999); ?></p><br>
		 	<h2>Please do the form fill up</h2>
		 	<form method="post" action="buy_insert.php">
		 	Your Name*:<br>
		 	<input class="inp" type="text" name="name" placeholder="Name" required=""><br />
		 	Your E-mail*:<br>
		 	<input class="inp" type="E-mail" name="mail" placeholder="E-mail" required=""><br />
		 	Your phone*:<br />
		 	<input class="inp" type="number" name="phone" placeholder="Phone" required=""><br />
		 	Your reference code:<br />
		 	<input class="inp" type="number" name="code" placeholder="reference code" required=""><br /><br />
		 	Color*:<br />
		 	<select name="col" class="color">
		 		<option value="Black">Black</option>
		 		<option value="Gold">Gold</option>
		 		<option value="White">White</option>
		 	</select><br />
		 	Quantity*:<br />
		 	<input class="price" type="text"  disabled="" value="<?php echo $item; ?>"> <br />
		 	<input class="price" type="hidden" name="quantity" value="<?php echo $item; ?>"> <br />

		 	Total price*:<br />
		 	<input class="price" type="text" disabled="" value="<?php echo "$".$c=$item*$b ?>"> <br />
		 	<input class="price" type="hidden" name="takas" value="<?php echo "$".$c=$item*$b ?>"> <br />

		 	Address*:<br />
		 	<textarea name="add" class="adds"></textarea><br/>
		 	<input class="btn2" type="submit" name="" value="Order Now">
		 	</form>
		 </span>

		<?php 
			}
		 ?>
	</div>
</body>
</html>