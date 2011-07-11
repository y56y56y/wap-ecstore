<?php
/*******************************************
* Sphider Version 1.3.x
* This program is licensed under the GNU GPL.
* By Ando Saabas          ando(a t)cs.ioc.ee
********************************************/
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); 
error_reporting(E_ALL); 
$include_dir = "./include"; 
include ("$include_dir/commonfuncs.php");
//extract(getHttpVars());

if (isset($_GET['query']))
	$query = $_GET['query'];
if (isset($_GET['search']))
	$search = $_GET['search'];
if (isset($_GET['domain'])) 
	$domain = $_GET['domain'];
if (isset($_GET['type'])) 
	$type = $_GET['type'];
if (isset($_GET['catid'])) 
	$catid = $_GET['catid'];
if (isset($_GET['category'])) 
	$category = $_GET['category'];
if (isset($_GET['results'])) 
	$results = $_GET['results'];
if (isset($_GET['start'])) 
	$start = $_GET['start'];
if (isset($_GET['adv'])) 
	$adv = $_GET['adv'];
	
	
$include_dir = "./include"; 
$template_dir = "./templates"; 
$settings_dir = "./settings"; 
$language_dir = "./languages";


require_once("$settings_dir/database.php");
require_once("$language_dir/en-language.php");
require_once("$include_dir/searchfuncs.php");
require_once("$include_dir/categoryfuncs.php");


include "$settings_dir/conf.php";

// include "$template_dir/$template/header.html";
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Shopping Cart</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	
</head>

<body>
	<div id="Wrapper">
		<div><img src="../images/quickmart_topbar.png"/></div>
		<a id="NavHome" href="../home.php" class="icon"><img src="../images/btn-home.png" /></a>
		<a style="float:left" id="NavLocator">  Find Locations  </a>
		<a><img src="../images/btn-search.png" /></a>

		
		<!-- These images are not part of this site, just try to see how it looks, these lines can be removed later-->
		<!-- <img src="images/a.jpg" />
		<img src="images/b.jpg" />
		<img src="images/c.jpg" /><img src="images/d.gif" />
		<img src="images/fastfood.jpg" />
		<img src="images/bakery.jpg" alt="bakery"/>
		<img src="images/grocery.jpg" />
		<img src="images/magazine.jpg" alt="magazine"/>
		<img src="images/burger.jpg" />
		<img src="images/burger.jpg" width="100%" height="50%"/>-->
		<br/>
		<div id="Main">
<?
include "$language_dir/$language-language.php";


if ($type != "or" && $type != "and" && $type != "phrase") { 
	$type = "and";
}

if (preg_match("/[^a-z0-9-.]+/", $domain)) {
	$domain="";
}


if ($results != "") {
	$results_per_page = $results;
}

if (get_magic_quotes_gpc()==1) {
	$query = stripslashes($query);
} 

if (!is_numeric($catid)) {
	$catid = "";
}

if (!is_numeric($category)) {
	$category = "";
} 



if ($catid && is_numeric($catid)) {

	$tpl_['category'] = sql_fetch_all('SELECT category FROM '.$mysql_table_prefix.'categories WHERE category_id='.(int)$_REQUEST['catid']);
}
	
$count_level0 = sql_fetch_all('SELECT count(*) FROM '.$mysql_table_prefix.'categories WHERE parent_num=0');
$has_categories = 0;

if ($count_level0) {
	$has_categories = $count_level0[0][0];
}



// require_once("$template_dir/$template/search_form.html");
?>
<br/>
<b>Search Result:</b>
<br/>
<?

function getmicrotime(){
    list($usec, $sec) = explode(" ",microtime());
    return ((float)$usec + (float)$sec);
    }



function poweredby () {
	global $sph_messages;
    //If you want to remove this, please donate to the project at http://www.sphider.eu/donate.php
    print $sph_messages['Powered by'];?>  <a href="http://www.sphider.eu/"><img src="sphider-logo.png" border="0" style="vertical-align: middle" alt="Sphider"></a>

    <?php 
}


function saveToLog ($query, $elapsed, $results) {
        global $mysql_table_prefix;
    if ($results =="") {
        $results = 0;
    }
    $query =  "insert into ".$mysql_table_prefix."query_log (query, time, elapsed, results) values ('$query', now(), '$elapsed', '$results')";
	mysql_query($query);
                    
	echo mysql_error();
                        
}

$search = 1;
switch ($search) {
	case 1:

		if (!isset($results)) {
			$results = "";
		}
		$search_results = get_search_results($query, $start, $category, $type, $results, $domain);
		require("$template_dir/$template/search_results.html");
	break;
	default:
		if ($show_categories) {
			if ($_REQUEST['catid']  && is_numeric($catid)) {
				$cat_info = get_category_info($catid);
			} else {
				$cat_info = get_categories_view();
			}
			require("$template_dir/$template/categories.html");
		}
	break;
	}

// include "$template_dir/$template/footer.html";
?>
			<footer id="Footer">
				<br/>
				<!--<a href="http://www.inspiritysoft.com" class="icon"><img src="images/icon-facebook.png" /></a>
				<a href="http://www.inspiritysoft.com" class="icon"><img src="images/icon-twitter.png" /></a>
				<a href="http://www.inspiritysoft.com" class="icon"><img src="images/icon-youtube.png" /></a>-->
				<a href="http://www.facebook.com/Amazon" class="icon"><img src="../images/icon-facebook.png" /></a>
				<a href="http://twitter.com/#!/amazondealss" class="icon"><img src="../images/icon-twitter.png" /></a>
				<a href="http://www.youtube.com" class="icon"><img src="../images/icon-youtube.png" /></a>
				<br/>
				<a href="http://www.inspiritysoft.com">Standard Site</a>
				<a href="tel: 123-456-7890" target="_self">123-456-7890</a>
				<a href="../home.php">Home</a> | <a href="../category.php">Shopping</a> | <a href="../register.php">Register</a> | <a href="../contact.php">Contact</a>
               <p id="Copyright">Copyright (c) 2011 - All Rights Reserved</p>
			   <p id="Copyright">Powered by Inspirity, Inc.</p>
           </footer>
       </div>
   </div>
</body>
</html>
