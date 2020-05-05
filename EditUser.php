<?php
session_start();
ob_start();
if(isset($_SESSION['ID']))
{

}
else
{
header('location:index.php');
}

?>
<?php
$City = $_POST['EditCity'];
$Name=$_POST['text1'];
$Address=$_POST['EidtAddress'];
$Email=$_POST['EditEmail'];
$Mobile=$_POST['EditMobile'];
$Gender=$_POST['EditGender'];
//$Birtdate=$_POST['EditBirthdate'];
$UserName=$_POST['EditUername'];
$Password=$_POST['EditPassword'];
include('shop.php');
// Specify the query to Update Record
$sql = "Update customer_registration set CustomerName='".$Name."',Address='".$Address."',City='".$City."',Email='".$Email."',Mobile='".$Mobile."',Gender='".$Gender."',UserName='".$UserName."',Password='".$Password."' where CustomerID=".$_SESSION['ID']."";
// Execute query
mysql_query($sql);
// Close The Connection

echo '<script type="text/javascript">alert("User Information Updated Succesfully");window.location=\'logout.php\';</script>';
?>

