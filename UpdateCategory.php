

<html>
<head>

<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_POST['txtId'];
$Name=$_POST['txtName'];
$Desc=$_POST['txtDesc'];
include('shop.php');
// Specify the query to Update Record
$sql = "Update Category_Master set CategoryName='".$Name."',Description='".$Desc."' where CategoryId=".$Id."";
// Execute query
mysql_query($sql);
// Close The Connection

echo '<script type="text/javascript">alert("Category Updated Succesfully");window.location=\'add_catagory.php\';</script>';
?>
</body>
</html>
