<?php
ob_start();
include('shop.php');

$UserName=$_REQUEST['UserName'];
$pass=$_REQUEST['Password'];

$sql="select * from customer_registration where UserName='$UserName' and Password='$pass'";
$x=mysql_query($sql)or die(mysql_error());

$count=mysql_num_rows($x);

if($count>0)
{
echo '{"userstatus":'.json_encode("1").'}';
}
else
{
echo '{"userstatus":'.json_encode("0").'}';
}
ob_flush();
?>