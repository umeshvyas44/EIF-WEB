<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>show_catjson</title>
</head>
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
$rs = mysql_query("SELECT * FROM Category_Master");
while($obj = mysql_fetch_object($rs)) {
$arr[] = $obj;
//'{"members":'.json_encode($arr).'}'
} echo json_encode($arr)
?>
<body>
</body>
</html>
