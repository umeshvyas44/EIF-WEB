
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<?php
$Id=$_GET['CartId'];
include('shop.php');
	// Specify the query to Insert Record
	$sql = "delete from shopping_cart where CartId='".$Id."'";
	// execute query
	mysql_query ($sql);
	// Close The Connection

	echo '<script type="text/javascript">alert("Item Deleted Succesfully");window.location=\'Cart.php\';</script>';
	?>
</body>
</html>
