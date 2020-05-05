<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

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
<?php
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("shopping", $con);
	
	// Specify the query to Insert Record
	 $sql ="insert into orders(CartId,CustomerID,ItemName,Quantity,Price,Total,OrderDate)  select CartId,CustomerID,ItemName,Quantity,Price,Total,OrderDate from Shopping_Cart_Final where CustomerID=".$_SESSION['ID']."";
	// execute query
	
	mysql_query ($sql,$con);
	$del = "delete from Shopping_Cart_Final where CustomerID=".$_SESSION['ID']."";
	mysql_query ($del,$con);
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Thank You For Your order");window.location=\'Cart.php\';</script>';
	
	?>
</body>
</html>
