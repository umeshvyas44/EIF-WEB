
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


<html>
<head>
<title>Products</title>

<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style10 {	color: #FFFFFF;
	font-weight: bold;
}
#Layer1 {
	position:absolute;
	left:49px;
	top:1052px;
	width:186px;
	height:43px;
	z-index:1;
}
.style20 {font-family: "Times New Roman", Times, serif; font-size: 18px; }
.style21 {font-size: 18}
.style22 {font-family: "Segoe UI", "Microsoft Sans Serif"}
.style26 {font-family: "Segoe UI", "Microsoft Sans Serif"; font-size: 18px; }
-->
</style>

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">ETHNIC<span> INDIAN FASHION</span><small><center>Be a Traditional</center></small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="customer_index.php">Home</a></li>
          <li class="active"><a href="cus_products.php">Products</a></li>
          <li><a href="Cart.php">Cart</a></li>
          <li><a href="about.php">Contact us</a></li>
           <li><a href="logout.php"><font color="#FF3333">LOGOUT</font></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="hbg"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','img/101.png',1)"><img src="img/100.png" alt="Sorry" width="937" height="240" id="Image4" /></a></div>
      <div class="fbg_resize">
        <div class="article">
          <h2 align="center">Products</h2>
          <p align="center">&nbsp;</p>
       
            <table width="892"  border="1" cellpadding="1" cellspacing="1" bordercolor="#669933">
              <tr>
                <td width="29"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style21 style22"><span class="style10">ID</span></div></td>
                <td width="118"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style21 style22"><span class="style10">ItemName</span></div></td>
                <td width="183"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style21 style22"><span class="style10">Description</span></div></td>
                <td width="49"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style21 style22"><span class="style10">Size</span></div></td>
                <td width="129"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style21 style22"><span class="style10">Image</span></div></td>
                <td width="75"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style21 style22"><span class="style10">Price</span></div></td>
                <td width="75"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style21 style22"><span class="style10">Discount</span></div></td>
                <td width="85"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style21 style22"><span class="style10">Total</span></div></td>
                <td width="101"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style21 style22"><span class="style10">Add to Cart</span></div></td>
              <strong></strong> </tr>
               <?php
include('shop.php');
// Specify the query to execute
$sql = "select * from item_master";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$ItemId=$row['ItemId'];
$ItemName=$row['ItemName'];
$Description=$row['Description'];
$Image=$row['Image'];
$Size=$row['Size'];
$Price=$row['Price'];
$Discount=$row['Discount'];
$Total=$row['Total'];
?>
             
              <tr>
                 <td><div align="center" class="style20 style22"><?php echo $ItemId ?></div></td>
                <td><div align="center" class="style26"><?php echo $ItemName ?></div></td>
                <td><div align="center" class="style26"><?php echo $Description ?></div></td>
                <td><div align="center" class="style26"><?php echo $Size ?></div></td>
                <td><div align="center" class="style20"><img src="./Products/<?php echo $Image ?>" height="125px" width="125px"/></div></td>
                <td><div align="center" class="style26"><?php echo $Price ?></div></td>
                <td><div align="center" class="style26"><?php echo $Discount ?></div></td>
                <td><div align="center" class="style26"><?php echo $Total ?></div></td>
                <td><div align="center" class="style20"><a href="InsertCart.php?ItemId=<?php echo $ItemId; ?>"><img src="img/85.png""/></a></div></td>
              </tr>
             <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
          </table>
            
          <p>&nbsp;</p>
        </div>
        <div class="clr"></div>
    </div>
  </div>
    <div class="footer">
    <div class="footer_resize">
      <div class="clr"></div>
    </div>
  </div>
</div>
<div align=center></div>
</body>
</html>
<?php
ob_flush();
?>
