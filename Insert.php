
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	$Id=$_GET['Id'];
	include('shop.php');
// Specify the query to execute
$sql = "select * from Item_Master where ItemId=".$Id."";
// Execute query.
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['ItemId'];
$Name=$row['ItemName'];
$Description=$row['Description'];
$Size=$row['Size'];
$Price=$row['Price'];
$Discount=$row['Discount'];
$Total=$row['Total'];
$Image=$row['Image'];
}
	$Qty=$_POST['txtQty'];
	$CID=$_SESSION['ID'];
	$ODate= date('d/m/y');
	$Net=$Total*$Qty;

	
	
	
	
	// Specify the query to Insert Record
	$sql = "insert into Shopping_Cart(CustomerId,ItemName,Quantity,Price,Total,OrderDate) values(".$CID.",'".$Name."',".$Qty.",".$Total.",".$Net.",".$ODate.")";
	// execute query
	mysql_query ($sql);
	// Close The Connection

	echo '<script type="text/javascript">alert("Item Added To the cart");window.location=\'Cart.php\';</script>';

?>
</body>
</html>
