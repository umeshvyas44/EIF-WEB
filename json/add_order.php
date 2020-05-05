

<?php
ob_start();
include('shop.php');

$uid=$_REQUEST['CustomerId'];

	 $sql ="insert into orders(CartId,CustomerID,ItemName,Quantity,Price,Total,OrderDate) select CartId,CustomerID,ItemName,Quantity,Price,Total,OrderDate from shopping_cart where CustomerID='$uid'";

	mysql_query ($sql);
	$del = "delete from shopping_cart where CustomerID='$uid'";
	mysql_query ($del);
// Loop through each records 
echo '{"status":'.json_encode("1").'}';

ob_flush();
?>