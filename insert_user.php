
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<?php

	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['cmbCity'];
	
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Gender=$_POST['rdGender'];
	$BirthDate=$_POST['txtDate'];
	
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	
	
	
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("shopping", $con);
	// Specify the query to Insert Record
	$sql = "insert into customer_registration(CustomerName,Address,City,Email,Mobile,Gender,BirthDate,UserName,Password) values('".$Name."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Gender."','".$BirthDate."','".$UserName."','".$Password."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';

?>
</body>
</html>
