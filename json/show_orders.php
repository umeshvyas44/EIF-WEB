

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
$arr = array();
$sql= "SELECT * FROM `orders` WHERE `CustomerId`='$uid' ORDER BY `orders`.`OrderId`  DESC";
$rs = mysql_query($sql);
while ($row = mysql_fetch_array($rs))
{
$row_array['CartId'] = $row['CartId'];
$row_array['ItemName'] = $row['ItemName'];
$row_array['Price'] = $row['Price'];
$row_array['Quantity'] = $row['Quantity'];
$row_array['Total'] = $row['Total']; 
$row_array['OrderDate'] = $row['OrderDate'];
$row_array['Status'] = $row['Status'];
array_push($arr,$row_array);
}
//'{"members":'.json_encode($arr).'}'
 echo '{"products":'.json_encode($arr).'}'
?>
