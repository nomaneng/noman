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
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />		
	<link rel="stylesheet" href="css/style.css"/>		
	<link rel="stylesheet" href="font/font.css"/>
</head>
<body>
	<ul class="navbar">
		<h2>SHOP.</h2>
		<div class="link">
		<li><a href="index.php">HOME</a></li>
		<li><a href="about.php">ABOUT</a></li>
		<li><a href="product.php">SHOP</a></li>
		<li><a href="contact.php">CONTACT</a></li>
		</div>
		<input class="btn" type="submit" value="search">
		<input class="input" type="search" name="search" placeholder="Search">
		
	</ul>
    <?php
        $sql="SELECT * FROM main_photo ORDER BY id DESC LIMIT 4";
        $ss=$object->query($sql);
        while ($data=$ss->fetch_assoc()) {
        ?>	
	<div class="slider-wrapper theme-dark">
            <div id="slider" class="nivoSlider">
               
	
                <img src="database/img/<?php echo $data['photo'] ?>" data-thumb="database/img/<?php echo $data['photo'] ?>" alt="" data-transition="slideInLeft" title="this is my caption"/>
				
                
				
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                This is sweet caption
            </div>
    </div>
    <?php
        }    
    ?>	
    <?php
        $sql="SELECT * FROM main_money_icon ORDER BY id DESC LIMIT 3";
        $ss=$object->query($sql);
        while ($data=$ss->fetch_assoc()) {
        ?>
    <div class="card">
    	<img src="database/main_money_icon/<?php echo $data['photo'] ?>">
    	<h3><?php echo $data['head'] ?></h3>
        <span><?php echo $data['details'] ?></span><br>
        	<a href="#">Learn More</a>
    </div>
    <?php
        }
    ?>
    <!--<div class="card">
        <img src="img/m2.png">
        <h3>FREE DELIVERY</h3>
        <span>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</span><br>
        <a href="#">Learn More</a>
        </div>
    <div class="card">
        <img src="img/m1.png">
        <h3>FREE DELIVERY</h3>
        <span>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</span><br>
        <a href="#">Learn More</a>
    </div> -->
    <div class="product_header">
    	<h4>COOL STUFF</h4>
    	<h2>PRODUCTS.</h2>
    	<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
    	
    </div>
    <?php
        $sql="SELECT * FROM main_product_photo ORDER BY id DESC LIMIT 9";
        $ss=$object->query($sql);
        while ($data=$ss->fetch_assoc()) {

    ?>
    <div class="product">
        <img src="database/home_product_photo/<?php echo $data['photo']; ?>">
        <span><?php echo $data['caption']; ?></span>
        <p>$<?php echo $data['taka']; ?></p>
        <a class="bb" href="database/buy2.php?id=<?php echo $data['id'] ?>">Click here to buy</a>
        <p><a class="nn" href="database/buy2.php?id=<?php echo $data['id'] ?>">To buy</a></p>
    </div>
    <?php
        }
    ?>

   <!-- <div class="product">
        <img src="img/p2.jpg">
        <span>Oppo</span>
        <p>$120</p>
    </div>
    <div class="product">
        <img src="img/p3.jpg">
        <span>Iphone4</span>
        <p>$800</p>
    </div>
    <div class="product">
        <img src="img/p5.jpg">
        <span>GalaxyS8+</span>
        <p>$900</p>
    </div>
    <div class="product">
        <img src="img/FB_IMG_15246411513061596.jpg">
        <span>Iphone6</span>
        <p>$1000</p>
    </div>
    <div class="product">
        <img src="img/FB_IMG_15246411239955718.jpg">
        <span>Galaxy</span>
        <p>$200</p>
    </div>
    <div class="product">
        <img src="img/FB_IMG_15246411057499922.jpg">
        <span>Iphone6+</span>
        <p>$950</p>
    </div>
    <div class="product">
        <img src="img/FB_IMG_15246410998510958.jpg">
        <span>GalaxyJ5</span>
        <p>$210</p>
    </div>
    <div class="product">
        <img src="img/FB_IMG_15246410290731668.jpg">
        <span>Iphone6+</span>
        <p>$1020</p>
    </div> -->
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

	
		
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    
	<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

</body>
</html>