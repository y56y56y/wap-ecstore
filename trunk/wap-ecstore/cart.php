<?php include 'header.php'?>

<?php
session_start();
$cart_array = $_SESSION['cart_array'];

echo "<table border='2'>";
echo 	"<thead>";
echo		"<tr>";
echo			"<th width='120'><u>Product Name</u></th>";
echo			"<th width='80'><u>Price</u></th>";
echo			"<th width='50'><u>Qty</u></th>";
echo			"<th width='150'><u>Total Price</u></th>";
echo		"</tr>";
echo	"</thead>";
echo	"<tbody>";
echo		"<tr><td colspan=\"4\">&nbsp;</td></tr>";
$total = 0;
$num_item = sizeof($cart_array);
for ($i = 0; $i < $num_item; $i++) {
	$prod_name = $cart_array[$i]['name'];
	$prod_price = $cart_array[$i]['price'];
	$prod_qty = $cart_array[$i]['qty'];
	$prod_total = $cart_array[$i]['total'];
	echo 	"<tr>";
	echo		"<td>$prod_name</td>";
	echo		"<td>$$prod_price</td>";
	echo		"<td>$prod_qty</td>";
	echo		"<td>$prod_total</td>";
	echo	"</tr>";
	$total += $prod_total;
}
echo		"<tr><td colspan=\"4\">&nbsp;</td></tr>";
echo	"</tbody>";
echo 	"<tfoot>";
echo		"<tr>";
echo			"<td><b>Total</b></td>";
echo			"<td colspan=\"2\"></td>";
echo			"<td align=\"right\"><b>$$total</b></td>";
echo		"</tr>";
echo	"</tfoot>";
echo "</table>";
$_SESSION['total'] = $total;
?>

<?php include 'footer.php'?>