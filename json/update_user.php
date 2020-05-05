<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>show_catjson</title>
</head>
<body bgcolor="#99FF00">
<?php 
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "database not found";
}
else
{
mysql_select_db("shopping",$con);
}
	$uid=$_REQUEST['CustomerId'];

	$Name=$_REQUEST['CustomerName'];
	$Address=$_REQUEST['Address'];
	$City=$_REQUEST['City'];
	
	$Email=$_REQUEST['Email'];
	$Mobile=$_REQUEST['Mobile'];
	$Password=$_REQUEST['Password'];
$arr = array();
$sql = "Update customer_registration set CustomerName='$Name',Address='$Address',City='$City',Email='$Email',Mobile='$Mobile',Password='$Password' where CustomerID='$uid'";

$obj = mysql_query($sql);
 echo '{"status":'.json_encode("1").'}';

?>

</body>
</html>
