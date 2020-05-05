<?php
ob_start();
session_start();


?>

<html>
<head>

<title>Login</title>
</head>

<body>
<?php
include('shop.php');
$UserName=$_POST['un'];
$Password=$_POST['ps'];
$UserType=$_POST['rdType'];
if($UserType=="Admin")
{

$sql = "select * from Admin_Master where UserName='".$UserName."' and Password='".$Password."'";

$result = mysql_query($sql);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{

$_SESSION['AdminId']=$row['AdminId'];
$_SESSION['UserName']=$row['UserName'];
header("location:admin_index.php");
} 

}
else if($UserType=="Customer")
{

$sql = "select * from Customer_Registration where UserName='".$UserName."' and Password='".$Password."' ";
$result = mysql_query($sql);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{


$_SESSION['ID']=$row['CustomerId'];
$_SESSION['Name']=$row['CustomerName'];
$_SESSION['Mobile']=$row['Mobile'];
$_SESSION['Address']=$row['Address'];
$_SESSION['Email']=$row['Email'];
$_SESSION['City']=$row['City'];
$_SESSION['UserName']=$row['UserName'];
header("location:customer_index.php");
}
} 



?>

</body>
</html>
<?php
ob_flush();
?>