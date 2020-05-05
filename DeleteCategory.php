
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['CatId'];
	// Establish Connection with MYSQL
	include('shop.php');
	// Specify the query to Insert Record
	$sql = "delete from Category_Master where CategoryId='".$Id."'";
	// execute query
	mysql_query ($sql);
	// Close The Connection

	echo '<script type="text/javascript">alert("Category Deleted Succesfully");window.location=\'add_catagory.php\';</script>';

?>
</body>
</html>
