<!--
	Following 6 lines have been commented out because I want to use PC to test Mobile version. 
	If neccessary, uncomment these lines to display in the normal way.
-->

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Shopping Cart</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	
</head>

<body>
	<div id="Wrapper">
		<div><img src="images/quickmart_topbar.png"/></div>
		<a id="NavHome" href="home.php" class="icon"><img src="images/btn-home.png" /></a>
		<a style="float:left" id="NavLocator">  Find Locations  </a>
		<a><img src="images/btn-search.png" /></a>

		<form action="choice.php" method="post">
			<div class="container">
				<div>Enter Zip or City Name</div>
				<div class="wrapper">
					<input name="location" type="text" />
					<input type="submit" value="submit"/>
				</div>
			</div>
		</form>

		<form action="sphider/search.php" method="post">
			<div class="container">
				<div>Search QuickMart</div>
				<div class="wrapper">
					<input name="query" type="text" />
					<input style="float:left" type="submit" value="Search" />
				</div>
			</div>
		</form>
		<br/>
		<br/>
		<div id="Main">
			Go to:<br/>
			<ul class="nav">
				<li><a href="category.php">Shopping</a></li>
				<li><a href="register.php">Register Here</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
			<br/>
			<br/>
			<footer id="Footer">
				<div id="MuzakPlayer"></div>
				<a href="http://www.inspiritysoft.com" class="icon"><img src="images/icon-facebook.png" /></a>
				<a href="http://www.inspiritysoft.com" class="icon"><img src="images/icon-twitter.png" /></a>
				<a href="http://www.inspiritysoft.com" class="icon"><img src="images/icon-youtube.png" /></a>
				<br/>	   
                <a href="http://www.inspiritysoft.com">Standard Site</a>

               <p id="Copyright">Copyright (c) 2011 - All Rights Reserved</p>
			   <p id="Copyright">Powered by Inspirity, Inc.</p>
           </footer>
       </div>
   </div>
</body>
</html>