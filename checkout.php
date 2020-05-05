<?php
session_start();
ob_start();
if(isset($_SESSION['ID']))
{

}
else
{
header('location:index.php');
}

?>
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<?php
	
	// Establish Connection with MYSQL
	include('shop.php');	
	$del = "delete from Shopping_Cart_Final where CustomerID=".$_SESSION['ID']."";
	mysql_query ($del,$con);
	// Specify the query to Insert Record
	$sql = "insert into Shopping_Cart_Final(CartId,CustomerID,ItemName,Quantity,Price,Total,OrderDate)  select CartId,CustomerID,ItemName,Quantity,Price,Total,OrderDate from Shopping_Cart where CustomerID=".$_SESSION['ID']."";
	// execute query
	
	mysql_query ($sql);

	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("shopping", $con);
	// Specify the query to Insert Record
	$sql = "delete from Shopping_Cart where CustomerID=".$_SESSION['ID']."";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection

	
	echo '<script type="text/javascript">alert("Thank You For Your order");window.location=\'Cart.php\';</script>';
	
	?>
</body>
</html>
