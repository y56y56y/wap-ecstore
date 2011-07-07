<!--
	This page shows the multiple matches when google returns more than 1 match of the zipcode or city name user inputs.
-->
<?php 
echo <<< HERE
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8" />

   <title>TRAVEL AGENCY</title>


   <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
   <meta name="format-detection" content="telephone=no" />

   <!-- todo <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />-->

    <link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/utils.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/typography.css" />
	<link rel="stylesheet" href="css/lists.css" />
	<link rel="stylesheet" href="css/forms.css" />
	<link rel="stylesheet" href="css/blocks.css" />
	<link rel="stylesheet" href="css/media-queries.css" />

	<script src="js/json2.js"></script>
	<script src="js/zepto.js"></script>
	<script src="js/m-trapeze.js"></script>
	<script src="js/m-carousel.js"></script>
	<script src="js/m-statusbar.js"></script>

   
   
   
   
   <meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.google.com/apis/gears/gears_init.js"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&libraries=geometry"></script>
<script type="text/javascript"> 
 
var initialLocation;
var browserSupportFlag =  new Boolean();
var map;
  
var myLoc = new Array();
  var message = new Array();
  var info = new Array();
HERE;

$loc = $_REQUEST["location"];	
echo <<< HERE

var address = "$loc"; 


	
var geocoder;
var lat_temp;
var lng_temp;
HERE;

// initialize() is to show all the matches of the zipcode or city name user inputs.
echo <<< HERE
function initialize() {
	
  // Try W3C Geolocation method (Preferred)
  if(navigator.geolocation) {
    browserSupportFlag = true;
    navigator.geolocation.getCurrentPosition(function(position) {
		if (address == "") {
			window.location = "text.php?location="+address;
		} else {
			zipcode_check();
			
			geocoder = new google.maps.Geocoder();
			geocoder.geocode( { 'address': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					var cont_h = document.getElementById("Content");
					var l_h = "<header class=\"row\"><h2>Multiple matches. Please Choose one</h2></header>";
					var oDiv_h = document.createElement('div');
					oDiv_h.innerHTML = l_h;
					cont_h.appendChild(oDiv_h);
					
					var len = results.length;
					if (len == 1) {
						window.location = "text.php?location="+results[0].formatted_address;
					} else {
						var addr_temp = new Array();
						for (var a = 0; a < len; a++) {
							lat = results[a].geometry.location.lat();
							lng = results[a].geometry.location.lng();
							addr_temp[a] = results[a].formatted_address;
							var cont = document.getElementById("Content");
							var l;
							l = "<div class=\"row\"><a href=\"text.php?location=" + addr_temp[a] + "\">" + addr_temp[a] + "</a></div>";
							var oDiv = document.createElement('div');
							oDiv.innerHTML = l;
							cont.appendChild(oDiv);
						}
					}
				} else {
					alert("Geocode was not successful for the following reason: " + status);
				}
			});
		}
		
    }, function() {
      handleNoGeolocation(browserSupportFlag);
    });
  } else if (google.gears) {
    // Try Google Gears Geolocation
    browserSupportFlag = true;
    var geo = google.gears.factory.create('beta.geolocation');
    geo.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.latitude,position.longitude);
    }, function() {
      handleNoGeolocation(browserSupportFlag);
    });
  } else {
    // Browser doesn't support Geolocation
    browserSupportFlag = false;
    handleNoGeolocation(browserSupportFlag);
  }
  
}
HERE;

// zipcode_check() is to check whether the zipcode is valid or not
echo <<< HERE
function zipcode_check() {
	var addr_length = address.length;
	var is_digits = true;
	for (var s = 0; s < addr_length; s++) {
		if (address.charAt(s).charCodeAt(0) >= 48 && address.charAt(s).charCodeAt(0) <= 57){
		} else {
			is_digits = false;
		}
	}
	if (is_digits == true && addr_length != 5) {
		alert("Wrong Zipcode!");
		window.location = "home.php";
	}							
}
 
function handleNoGeolocation(errorFlag) {
  if (errorFlag == true) {
    initialLocation = newyork;
    contentString = "Error: The Geolocation service failed.";
  } else {
    initialLocation = siberia;
    contentString = "Error: Your browser doesn't support geolocation. Are you in Siberia?";
  }
  map.setCenter(initialLocation);
  infowindow.setContent(contentString);
  infowindow.setPosition(initialLocation);
  infowindow.open(map);
}
</script> 
   


</head>

<body class="home-page" onload="initialize()">

   <div id="Wrapper">
       <header id="Chrome">
           <h1 id="Logo"></h1>
           <nav id="ChromeNav">
               <ul>
                   <li id="NavHome"><a href="home.php" class="icon">Home</a></li>
                   <li id="NavLocator"><a href="/locator/search/">
					<span class="word">Find</span> <span class="word">Locations</span></a></li>
                   <li id="NavSearch"><a href="/search/" class="icon">Search</a></li>
               </ul>
           </nav>

           <form id="FormLocator" action="choice.php" method="get" class="chrome-block">
               <div class="container">
                   <label for="id_location">Enter Zip or City Name, State</label>
                   <div class="wrapper">
                       <button id="LocatorCurrent" class="button-primary">Use Curent Location</button>
                       <input id="id_location" name="location" type="text"  />
                       <input id="id_lat" name="lat" type="hidden" />
                       <input id="id_lng" name="lng" type="hidden" />
                       <input id="id_geocode_results" name="geocode_results" type="hidden" />
                       <button id="LocatorSearch" class="button-secondary" type="submit">Search</button>
                   </div>
               </div>
           </form>

           <form id="FormSearch" action="sphider/search.php" method="get" class="chrome-block">
               <div class="container">
                   <label for="id_q">Search</label>
                   <div class="wrapper">
                       <input id="query" name="query"  type="text" />

                       <input type="hidden" name="c" id="id_c" />

                       <button class="button-secondary" type="submit">Search</button>
                   </div>
               </div>
           </form>
       </header>
	   
HERE;
?>

<div id="Main">
    <div id="Content" onload="initialize()">
		
	</div>


<?php include 'footer.php'?>