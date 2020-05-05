<?php 
ob_start();
include('shop.php');
	$cid=$_REQUEST['CartId'];
	
$del="DELETE FROM `shopping_cart` WHERE CartId='$cid'";
	mysql_query ($del);
// Loop through each records 
echo '{"status":'.json_encode("1").'}';
ob_flush();
?>