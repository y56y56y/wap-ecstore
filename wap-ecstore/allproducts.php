<?php include 'header.php'?>

<?php
$cid = $_REQUEST['cid'];
$cname = $_REQUEST['cname'];

include ($_SERVER['DOCUMENT_ROOT'].'/insp-modules/misc/config.php'); 

$conn = mysql_connect($host, $user, $password) or die(mysql_error());
mysql_select_db("ecstore_nm_db");

$sql_prod = "SELECT * FROM product WHERE CatID='$cid'";
$result_prod = mysql_query($sql_prod, $conn) or die(mysql_error());

echo "<p><b>$cname</b></p>";
while ($row_prod = mysql_fetch_assoc($result_prod)) {
	$pid = $row_prod['ProdID'];
	$pname = $row_prod['Name'];
	echo "<ul>";
	echo "<li><a href='product.php?pid=$pid'>$pname</a></li>";
	echo "</ul>";
}
?>

<?php include 'footer.php'?>