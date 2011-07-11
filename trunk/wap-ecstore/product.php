<?php include 'header.php'?>

<?php
if (isset($_POST['submit'])) {
	$pid = $_REQUEST['pid'];
	$qty = $_POST['qty'];
	
	include ($_SERVER['DOCUMENT_ROOT'].'/insp-modules/misc/config.php'); 

	$conn = mysql_connect($host, $user, $password) or die(mysql_error());
	mysql_select_db("ecstore_nm_db");

	$sql_prod = "SELECT * FROM product WHERE ProdID='$pid'";
	$result_prod = mysql_query($sql_prod, $conn) or die(mysql_error());
	
	$prod = mysql_fetch_assoc($result_prod);
	
	$pname = $prod['Name'];
	$pprice = $prod['Price'];
	$ptotal = $pprice * $qty;
	
	$arrProduct = array(
		"name" => "$pname",
		"price" => "$pprice",
		"qty" => $qty,
		"total" => $ptotal
	);
	
	session_start();
	$cart_array = $_SESSION['cart_array'];
	array_push($cart_array, $arrProduct);
	echo print_r($arrProduct . "....." . $cart_array);
	$_SESSION['cart_array'] = $cart_array;
	header("location: cart.php");
}
?>

<?php
$pid = $_REQUEST['pid'];

include ($_SERVER['DOCUMENT_ROOT'].'/insp-modules/misc/config.php'); 

$conn = mysql_connect($host, $user, $password) or die(mysql_error());
mysql_select_db("ecstore_nm_db");

$sql_prod = "SELECT * FROM product WHERE ProdID='$pid'";
$result_prod = mysql_query($sql_prod, $conn) or die(mysql_error());

while ($row_prod = mysql_fetch_assoc($result_prod)) {
	$pname = $row_prod['Name'];
	$ppath = $row_prod['Image_path'];
	echo "<p><b>$pname</b></p>";
	echo "<form action='' method='post'>";
	echo 	"<img src='images/$ppath' /><br/>";
	echo 	"Qty: <input type='text' name='qty' />";
	echo 	"<input type='submit' name='submit' value='Submit' />";
	echo "</form>";
	echo "<br/>";
	echo "<br/>";
}
?>

<?php include 'footer.php'?>