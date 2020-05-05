<?php
session_start();
ob_start();
if(isset($_SESSION['AdminId']))
{
 echo "";
}
else
{
header('location:index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>orders</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #FF0099}
.style10 {color: #FFFFFF}
.style11 {font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 95%;}
.style12 {color: #0066FF}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body onload="MM_preloadImages('img/47.jpg')">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
         <h1><a href="admin_index.php">ETHNIC<span> INDIAN FASHION</span><small><center>Be a Traditional</center></small></a></h1>       </div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="add_catagory.php">Category</a></li>
          <li class="active"><a href="order.php">Orders</a></li>
          <li><a href="allfeed.php">Feedback</a></li>
          <li><a href="logout.php"><font color="#FF0000"><b>Logout</b></font></a></li>
          
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="hbg"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','img/101.png',1)"><img src="img/100.png" alt="Sorry" width="937" height="240" id="Image4" /></a></div>
      <div class="mainbar">
        <div class="article">
          <h2 align="center">Orders</h2>
          <form id="form1" name="form1" method="post" action="">
            <table width="100%" border="1" bordercolor="#00CC99" >
              <tr bgcolor="#0099FF">
                <td class="style10 style3"><div align="center"><strong>ID</strong></div></td>
                <td class="style10 style3"><div align="center"><strong>Customer Name</strong></div></td>
                <td class="style10 style3"><div align="center"><strong>Item Name</strong></div></td>
                <td class="style10 style3"><div align="center"><strong>Quantity</strong></div></td>
                <td class="style10 style3"><div align="center"><strong>Price</strong></div></td>
                <td class="style10 style3"><div align="center"><strong>Total</strong></div></td>
                <td class="style10 style3"><div align="center"><strong>Shipping Address</strong></div></td>
              </tr>
              <?php
include('shop.php');
// Specify the query to execute
$sql = "SELECT customer_registration.CustomerId, customer_registration.CustomerName, orders.ItemName, orders.Quantity, orders.Price, orders.Total 
FROM customer_registration, orders WHERE customer_registration.CustomerId=orders.CustomerId ";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CustomerId'];
$CustomerName=$row['CustomerName'];
$ItemName=$row['ItemName'];
$Quantity=$row['Quantity'];
$Price=$row['Price'];
$Total=$row['Total'];

?>
              <tr bgcolor="#C4E8FF">
                <td><div align="left" class="style5 style11 style12">
                  <div align="center"><strong><?php echo $Id;?></strong></div>
                </div></td>
                <td><div align="left" class="style5 style11 style12">
                  <div align="center"><strong><?php echo $CustomerName;?></strong></div>
                </div></td>
                <td><div align="left" class="style5 style11 style12">
                  <div align="center"><strong><?php echo $ItemName;?></strong></div>
                </div></td>
                <td><div align="left" class="style5 style11 style12">
                  <div align="center"><strong><?php echo $Quantity;?></strong></div>
                </div></td>
                <td><div align="left" class="style5 style11 style12">
                  <div align="center"><strong><?php echo $Price;?></strong></div>
                </div></td>
                <td><div align="left" class="style5 style11 style12">
                  <div align="center"><strong><?php echo $Total;?></strong></div>
                </div></td>
                <td><div align="center" class="style12"><a href="Detail.php?CustomerId=<?php echo $Id;?>">Shipping Address</a></div></td>
              </tr>
              <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
       </table>
          </form>
          <p align="center">&nbsp;</p>
          </div>
        <div class="article"></div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 align="center" class="star">Category</h2>
          <div>
            <div>
              <div id="right-col">
               <ul>
                  <?php


// Specify the query to execute
$sql = "select * from Category_Master";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];


?>
               
               <li> <a href="add_products.php?CategoryId=<?php echo $Id;?>"><?php echo $CategoryName;?></a></li>
               
	<?php
	}
	?>


</ul>
              </div>
            </div>
          </div>
        </div>
        <div class="gadget"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','img/47.jpg',1)"><img src="img/511.jpg" name="Image2" width="180" height="240" border="0" id="Image2" /></a></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&nbsp;</p>
      <div class="clr"></div>
    </div>
  </div>
</div>
<div align=center></div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>
<?php

ob_flush();
?>