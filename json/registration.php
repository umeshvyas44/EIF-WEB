<?php
ob_start();
include('shop.php');

	$Name=$_REQUEST['CustomerName'];
	$Address=$_REQUEST['Address'];
	$City=$_REQUEST['City'];
	
	$Email=$_REQUEST['Email'];
	$Mobile=$_REQUEST['Mobile'];
	
	$UserName=$_REQUEST['UserName'];
	$Password=$_REQUEST['Password'];
$sql1="select UserName from customer_registration where UserName='$UserName'";
$ex=(mysql_query($sql1));
$raw=mysql_num_rows($ex);
if($raw>0)
{
	
	echo '{"status":'.json_encode("1").'}';
}
else
{
$a="insert into customer_registration(CustomerName,Address,City,Email,Mobile,UserName,Password) values('$UserName','$Address','$City','$Email','$Mobile','$UserName','Password')";
$ob=mysql_query($a);


echo '{"status":'.json_encode("0").'}';

}


ob_flush();
?>
