

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
$sql= "SELECT shopping_cart.CartId, shopping_cart.ItemName, shopping_cart.Quantity, shopping_cart.Total, shopping_cart.Price, item_master.Image
FROM shopping_cart, item_master
WHERE item_master.ItemName=shopping_cart.ItemName and shopping_cart.CustomerId='$uid'";
$rs = mysql_query($sql);


while ($row = mysql_fetch_array($rs))
{
$row_array['CartId'] = $row['CartId'];
$row_array['ItemName'] = $row['ItemName'];
$row_array['Price'] = $row['Price'];
$row_array['Quantity'] = $row['Quantity'];
$row_array['Image'] = $row['Image'];
$row_array['Total'] = $row['Total']; 
array_push($arr,$row_array);
}
//'{"members":'.json_encode($arr).'}'
 echo '{"products":'.json_encode($arr).'}'
?>
