

<html>
<head>

<title>Category Insert</title>
</head>

<body>
<?php

	$Name=$_POST['txtName'];
	$Desc=$_POST['txtDesc'];
	$path1 = $_FILES["txtFile"]["name"];
	move_uploaded_file($_FILES["txtFile"]["tmp_name"],"./Products/"  .$_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("shopping", $con);
	// Specify the query to Insert Record
	$sql = "insert into Category_Master	(CategoryName,Description,Image) values('".$Name."','".$Desc."','".$path1."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Category Inserted Succesfully");window.location=\'add_catagory.php\';</script>';

?>
</body>
</html>
