<?php include 'header.php'?>

<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/insp-modules/misc/config.php'); 

$conn = mysql_connect($host, $user, $password) or die(mysql_error());
mysql_select_db("ecstore_nm_db");

$sql_cat = "SELECT * FROM category";
$result_cat = mysql_query($sql_cat, $conn) or die(mysql_error());

echo "<p><b>Category</b></p>";
while ($row_cat = mysql_fetch_assoc($result_cat)) {
	$cid = $row_cat['CatID'];
	$cname = $row_cat['CatName'];
	$cpath = $row_cat['Image_path'];
	echo "<div id='product'><img src='images/$cpath' /><br/><a align='center' href='allproducts.php?cid=$cid&cname=$cname'>$cname</a></div>";
}
?>

<?php include 'footer.php'?>