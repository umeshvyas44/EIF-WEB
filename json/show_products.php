
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

$arr = array();
$rs = mysql_query("SELECT * FROM item_master ORDER BY RAND();");


while($row = mysql_fetch_array($rs))
 {
$row_array['ItemId'] = $row['ItemId'];
$row_array['CategoryId'] = $row['CategoryId'];
$row_array['ItemName'] = $row['ItemName'];
$row_array['Description'] = $row['Description'];
$row_array['Size'] = $row['Size'];
$row_array['Image'] = $row['Image'];
$row_array['Price'] = $row['Price']; 
$row_array['Discount'] = $row['Discount'];
$row_array['Total'] = $row['Total']; 
array_push($arr,$row_array);
//'{"members":'.json_encode($arr).'}'
} echo '{"products":'.json_encode($arr).'}'
?>
