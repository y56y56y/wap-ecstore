<?php include 'header.php'?>
		<!--<form action="choice.php" method="post">
			<div class="container">
				<div>Enter Zip or City Name</div>
				<div>
					<div id="input"><input name="location" type="text" /></div>
					<input style="float:left" type="submit" value="submit"/>
				</div>
			</div>
		</form>-->
		
		<a href="http://www.google.com/xhtml?site=local&hl=en&daddr=%20&near=%20">Location using Google Maps wap</a>
		<br/>
		<a href="http://wap.mapquest.com">Location using MapQuest</a>

		<form action="sphider/search.php" method="get">
			<div class="container">
				<div>Search QuickMart</div>
				<div class="wrapper">
					<div id="input"><input name="query" type="text" /></div>
					<input style="float:left" type="submit" value="Search" />
				</div>
			</div>
		</form>
		<br/>
<?php
session_start();
$cart_array = array();
$_SESSION['cart_array'] = $cart_array;
// echo print_r($_SESSION);
?>

	<p style="font-size: 20px"><b>Go to:</b></p><br/>
	<ul>
		<li><a href="#about">About Us</a></li>
		<li><a href="category.php">Shopping</a></li>
		<li><a href="register.php">Register Here</a></li>
		<li><a href="contact.php">Contact Us</a></li>
	</ul>
	<br/>
	<br/>
	<a id="about" name="about">About Us</a>
	There are more mobile phones in the world than televisions and PCs combined. And millions of people are using those mobile phones to connect to the Internet. To see your site the same way these millions of mobile users do, try the dotMobi mobile phone emulator, which "emulates" a real mobile phone Web browser. 
    <br/>
<?php include 'footer.php'?>