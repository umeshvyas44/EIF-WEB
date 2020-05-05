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
<title>Cart</title>

<link href="style.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #FF0099}
.style10 {color: #FFFFFF}
.style9 {
	font-size: 95%;
	
	color: #000000;
	
}
-->
</style>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style11 {
	color: #CCCCCC;
	font-size: 9px;
}
.style12 {color: #0000FF}
.style18 {
	font-size: 14px;
	font-weight: bold;
}

.style26 {
	font-size: 18px;
	visibility: visible;
}
.style37 {font-family: "Segoe UI Light", "Microsoft Sans Serif"}
.style39 {
	font-family: "Segoe UI Light", "Microsoft Sans Serif";
	font-size: 14px;
	font-weight: bold;
}
.style40 {font-weight: bold}
.style42 {font-size: 14px}
.style43 {font-family: "Segoe UI", "Microsoft Sans Serif"}
.style44 {
	color: #000066;
	font-family: "Segoe UI Light", "Microsoft Sans Serif";
	font-size: 14px;
}
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
<body onLoad="MM_preloadImages('img/44.jpg','img/101.png')">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
       <h1><a href="index.html">ETHNIC<span> INDIAN FASHION</span><small><center>Be a Traditional</center></small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
         <li><a href="customer_index.php">Home</a></li>
          <li><a href="cus_products.php">Products</a></li>
          <li class="active"><a href="Cart.php">Cart</a></li>
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
      <div class="mainbar">
        <div class="article">
          <h2 align="center">Cart</h2>
          <form id="form1" name="form1" method="post" action="">
            <table width="100%" border="1" bordercolor="#FF3300" >
              <tr class="style18">
                <td width="4%" bgcolor="#FF6600" class="style10 style3"><span class="style18">ID</span></td>
                <td width="28%" bgcolor="#FF6600" class="style10 style3"><span class="style18">Name</span></td>
                <td width="14%" bgcolor="#FF6600" class="style18 style10"> Price</td>
                <td width="10%" bgcolor="#FF6600" class="style10 style3"><span class="style18">Quantity</span></td>
                <td width="12%" bgcolor="#FF6600" class="style10 style3"><span class="style18">Total</span></td>
                <td width="23%" bgcolor="#FF6600" class="style10 style3"><span class="style18">Image</span></td>
                <td width="9%" bgcolor="#FF6600" class="style10 style3"><span class="style18">Delete</span></td>
              </tr>
              <?php
include('shop.php');
// Specify the query to execute
$sql = "SELECT shopping_cart.CartId, shopping_cart.ItemName, shopping_cart.Quantity, shopping_cart.Total, item_master.Total, item_master.Image
FROM shopping_cart, item_master
WHERE item_master.ItemName=shopping_cart.ItemName and shopping_cart.CustomerId=".$_SESSION['ID']."";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CartId'];
$ItemName=$row['ItemName'];
$Total=$row['Total'];
$Quantity=$row['Quantity'];
$Total=$row['Total'];
$Image=$row['Image'];
?>
              <tr>
                <td class="style3"><div align="left" class="style9 style5 style18 style20 style37 style42 style42 style37 style26 style26">
                  <div align="center"><?php echo $Id;?></div>
                </div></td>
                <td class="style3" style="text-align: center"><div align="left" class="style9 style5 style18 style21 style37 style42 style42 style37 style26 style26">
                  <div align="center"><?php echo $ItemName;?></div>
                </div></td>
                <td class="style3" style="text-align: center"><div align="left" class="style9 style5 style18 style22 style37 style42 style42 style37 style26 style26">
                  <div align="center"><?php echo $Total;?></div>
                </div></td>
                <td class="style3" style="text-align: center"><div align="left" class="style9 style5 style18 style23 style37 style42 style42 style37 style26 style26">
                  <div align="center"><?php echo $Quantity;?></div>
                </div></td>
                <td class="style3" style="text-align: center"><div align="left" class="style9 style5 style18 style24 style37 style42 style42 style37 style26 style26">
                  <div align="center"><?php echo $Total* $Quantity;?></div>
                </div></td>
                <td class="style3" style="text-align: center"><div align="center" class="style39 style42 style42 style37 style26 style26"><img src="./Products/<?php echo $Image;?>" alt="" width="124" height="124" border="0" class="style40" /></div></td>
                <td class="style3" style="text-align: center"><div align="center" class="style39 style42 style42 style37 style26 style26"><a href="DeleteCart.php?CartId=<?php echo $Id;?>"><img src="img/87.png""/></a></div></td>
              </tr>
              <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
            </table>
            <p>&nbsp;</p>
            <center><div align="center">
             
              <p class="style26"><label><a href="checkout.php"><strong>Procced To Checkout</strong></a></label>&nbsp;</p>
            </div>
              <p>&nbsp;</p>
            </center>
          </form>
		  
          <div id="CollapsiblePanel1" class="CollapsiblePanel">
            <div class="CollapsiblePanelTab" tabindex="0">
              <div align="center" class="style11">CHECK OUT</div>
            </div>
            <div class="CollapsiblePanelContent">
              <center>
              </center>
              <table width="603" height="67" border="1">
                <tr>
                  <td width="240" height="32"><div align="left">Name : <strong><?php echo $_SESSION['Name'];?></strong></div></td>
                  <td width="146"><div align="left">Mobile : <?php echo $_SESSION['Mobile'];?></div></td>
                  <td width="195"><div align="left">date : <?php echo date("M , d - Y");?></div></td>
                </tr>
                <tr>
                  <td height="27"><div align="left">Address : <?php echo $_SESSION['Address'];?></div></td>
                  <td><div align="left">City : <?php echo $_SESSION['City'];?></div></td>
                  <td><div align="left">Email : <?php echo $_SESSION['Email'];?></div></td>
                </tr>
              </table>
              <h2 align="center"><strong>Cart Description</strong></h2>
              <table width="100%" height="101" border="1" bordercolor="#FF3300" >
              <tr bgcolor="#0099FF">
              
                <td width="35%" class="style10 style3"><div align="center"><strong>Item Name</strong></div></td>
              
                <td width="23%" class="style10 style3"><div align="center"><strong>Quantity</strong></div></td>
                 <td width="18%" class="style10 style3"><div align="center"><strong>Price</strong></div></td>
                <td width="24%" class="style10 style3"><div align="center"><strong>Total</strong></div></td>
                </tr>
				<?php 
				 $dt=date("y/m/d");
				 $pro="select ItemName,Quantity,Price,Total from Shopping_Cart_Final where CustomerID=".$_SESSION['ID']."";
				$rslt = mysql_query($pro);
				// Loop through each records 
				while($row = mysql_fetch_array($rslt))
				{
			
				$in=$row['ItemName'];
				$qty=$row['Quantity'];
				$price=$row['Price'];
				$tot=$row['Total'];
			
				?>
                <tr bgcolor="#C1F2FF">
              
                <td width="35%" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png"  class="style10 style3"><span class="style12"><?php echo $in;?></span></td>
              
                <td width="23%" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" class="style10 style3"><span class="style12"><?php echo $qty?></span></td>
                 <td width="18%" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png" class="style10 style3"><span class="style12"><?php echo $price;?></span></td>
                <td width="24%" background="images/10447-green-fabric-1366x768-abstract-wallpaper.png"  class="style10 style3"><span class="style12"><?php echo $tot;?></span></td>
                </tr>
				<?php
}
// Retrieve Number of records returned
$a=0;
//$p=$Price+$p;

$records = mysql_num_rows($result);
$sub="SELECT * FROM Shopping_Cart_Final";
$stt=mysql_query ($sub);
while($row = mysql_fetch_array($stt))
				{
			
				
				$p=$row['Total'];
				$a=$a+$p;
			
				}
?>
              </table>
              
            <table width="604">
            <tr bgcolor="#FFFBFF">
    <td width="451"><div align="right"><strong>Grand Total :</strong></div></td>
    <td width="137" bgcolor="#FFCC66"><?php 
	echo $a;
	//	echo mysql_query ($sub,$con);
	?></td>
  </tr>
            <tr >
           
              <td><div align="right" class="style44">
              <form name="form2" method="post" action="odrer.php">
              <input type="submit" name="Purchasebutton" id="Purchasebutton" value="PURCHASE PRODUCTS">
            </form></div></td>
            </tr>
</table>

            
            </div>
          </div>
        </div>
        <div class="article"></div>
      </div>
      <div class="sidebar">
        <div class="gadget"> 
          <div align="center" class="style26"><?php echo $_SESSION['Name'];?>'s cart</div>
        </div>
        <div class="gadget">
          <h2 align="center" class="star">Catagory</h2>
          <div>
           <div>
          <div id="right-col">
    

    <div class="scroll">
       <ul class="style43 style42 style42">
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
     <li><a href="cus_product.php?CategoryId=<?php echo $Id;?>"><?php echo $CategoryName;?></a></li>
    
    <?php
	}
// Close the connectio
?>
                   </ul>
  </div>
   
    </div>
          </div>
          </div>
        </div>
        <div class="gadget">
          <div class="clr"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','img/44.jpg',1)"><img src="img/52.jpg" name="Image3" width="180" height="240" border="0" id="Image3" /></a></div></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize"></div>
  </div>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
//-->
</script>
</body>
</html>
<?php
ob_flush();
?>