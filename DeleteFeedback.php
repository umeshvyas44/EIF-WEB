

<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['FeedbackId'];
	include('shop.php');
	// Specify the query to Insert Record
	$sql = "delete from Feedback_Master where FeedbackId='".$Id."'";
	// execute query
	mysql_query ($sql);
	// Close The Connection

	echo '<script type="text/javascript">alert("Feedback Deleted Succesfully");window.location=\'allfeed.php\';</script>';

?>
</body>
</html>
