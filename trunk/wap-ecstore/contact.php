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
		<img src="images/quickmart_topbar.png"/>
		
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
		
		<a><img src="images/quickmart_topbar.png"/></a>
		
		<div id="Main">
			<div id="Content">
		
				<header class="row">
					<h2>Contact Us</h2>
				</header>
				
				<form class="row" action="" method="post">
					<table cellpadding="100px">
						<tr>
							<td><b>Your Name:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
							<td><input type="text" name="name"/></td>
						</tr>
						<tr>	
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td><b>Your Email:</b></td>
							<td>
								<input type="text" name="username"/>
							</td>
						</tr>
						<tr>	
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td><b>Subject: </b></td>
							<td><input type="text" name="subject" /></td>
						</tr>
					</table>
					<br/>
					<p><b>Comments:</b></p>
					<textarea rows="10" cols="30"></textarea>
					<br/>
					<!--<input type="submit" class="button-primary" />-->
					<input type="submit" value="Submit"/>

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