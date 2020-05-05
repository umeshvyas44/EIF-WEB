<?php
ob_start();
include('shop.php');
$CartId=$_REQUEST['CartId'];
$CustomerId=$_REQUEST['CustomerId'];
$ItemName=$_REQUEST['ItemName'];
$Quantity=$_REQUEST['Quantity'];
$Price=$_REQUEST['Price'];
$Total=$_REQUEST['Total'];
$OrderDate=$_REQUEST['OrderDate'];

// Specify the query to execute
$sql = "insert into shopping_cart(CartId,CustomerId,ItemName,Quantity,Price,Total,OrderDate) values('$CartId','$CustomerId','$ItemName','$Quantity','$Price','$Total','$OrderDate')";

// Execute query
$result = mysql_query($sql);
// Loop through each records 
echo '{"status":'.json_encode("1").'}';
ob_flush();
?>