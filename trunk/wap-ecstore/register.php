<!--
	This page shows the register form after you click the register on the home page
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
		<div id="Main">
			<div id="Content">
				<h2>Register</h2>
				
				<form class="row" action="reg.php" method="post">
					<b>Email:</b>
					<p><input type="text" name="username"/>
					</p>
					<b>Phone:</b>
					<p><input type="text" name="phone"/></p>
					<input type="submit" class="button-primary" />
				</form>
			</div>

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

