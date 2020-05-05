<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style12 {color: #000000}
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
      <center><div class="mainbar">
        <div class="article">
          <h2 align="center">Product In Detail  </h2>
            <?php
			
$Id=$_GET['ItemId'];
include('shop.php');
$sql = "select * from Item_Master where ItemId=".$Id."";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['ItemId'];
$Name=$row['ItemName'];
$Description=$row['Description'];
$Size=$row['Size'];
$Price=$row['Price'];
$Discount=$row['Discount'];
$Total=$row['Total'];
$Image=$row['Image'];
}
?>
   
        <form id="form1" name="form1" method="post" action="Insert.php?Id=<?php echo $Id;?>">
          <table width="100%" height="407" border="0" cellpadding="0" cellspacing="0" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png">
            <tr>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#00CCFF" class="style12">Item Code:</td>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#AEDFFF"><span class="style12"><?php echo $Id;?></span></td>
            </tr>
            <tr>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#00CCFF"><span class="style12">Item Name:</span></td>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#AEDFFF"><span class="style12"><?php echo $Name;?></span></td>
            </tr>
            <tr>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#00CCFF"><span class="style12">Description:</span></td>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#AEDFFF"><span class="style12"><?php echo $Description;?></span></td>
            </tr>
            <tr>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#00CCFF">&nbsp;</td>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#AEDFFF"><img src="./img/<?php echo $Image;?>" alt="Image wait" width="125" height="125" border="4" /></td>
            </tr>
            <tr>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#00CCFF"><span class="style12">Size:</span></td>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#AEDFFF"><span class="style12"><?php echo $Size;?></span></td>
            </tr>
            <tr>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#00CCFF"><span class="style12">Quantity:</span></td>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#AEDFFF"><span class="style12" id="sprytextfield1">
                <label>
                <input type="number" min=1 max=9 name="txtQty" id="txtQty" value="1" />
                </label>
              </span></td>
            </tr>
            <tr>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#00CCFF"><span class="style12">Price:</span></td>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#AEDFFF"><span class="style12"><?php echo $Price;?></span></td>
            </tr>
            <tr>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#00CCFF"><span class="style12">Discount:</span></td>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#AEDFFF"><span class="style12"><?php echo $Discount;?></span></td>
            </tr>
            <tr>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#00CCFF"><span class="style12">Total:</span></td>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#AEDFFF"><span class="style12"><?php echo $Total;?></span></td>
            </tr>
            <tr>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#000000">&nbsp;</td>
              <td align="center" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" bgcolor="#AEDFFF"><span class="style12">
                <label>
                <input type="submit" name="button" id="button" value="Add To Cart" />
                </label>
              </span></td>
            </tr>
          </table>
         </form>
        </div>
        <div class="clr"></div>
    </div></center>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
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
