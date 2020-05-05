
<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<?php

	$cmbCategory=$_GET['CategoryId'];
	$txtName=$_POST['txtName'];
	$txtDesc=$_POST['txtDesc'];
	$txtSize=$_POST['txtSize'];
	$txtPrice=$_POST['txtPrice'];
	$txtDiscount=$_POST['txtDiscount'];
	$txtFinal=$_POST['txtFinal'];
	
	$path1 = $_FILES["txtFile"]["name"];
	move_uploaded_file($_FILES["txtFile"]["tmp_name"],"./Products/"  .$_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("shopping", $con);
	// Specify the query to Insert Record
	$sql = "insert into Item_Master	(CategoryId,ItemName,Description,Size,Image,Price,Discount,Total) values(".$cmbCategory.",'".$txtName."','".$txtDesc."','".$txtSize."','".$path1."',".$txtPrice.",".$txtDiscount.",".$txtFinal.")";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	header("location:add_products.php?CategoryId=".$cmbCategory."")

?>
</body>
</html>
