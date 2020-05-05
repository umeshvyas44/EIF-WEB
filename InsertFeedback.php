
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
	$FeedBack=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	
	
	
	include('shop.php');
	// Specify the query to Insert Record
	$sql = "insert into feedback_master(CustomerId,Feedback,Date) values('".$Id."','".$FeedBack."','".$FDate."')";
	// execute query
	mysql_query ($sql);
	// Close The Connection

	
	echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'about.php\';</script>';

?>
</body>
</html>
