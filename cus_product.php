
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
.style10 {
	color: #FFFFFF;
	font-weight: bold;
	text-align: center;
}
#Layer1 {
	position:absolute;
	left:49px;
	top:1052px;
	width:186px;
	height:43px;
	z-index:1;
}
.style12 {font-size: 18; }
.style13 {font-size: 18px}
.style16 {font-size: 18px; font-weight: bold; font-family: "Times New Roman", Times, serif; }
.style17 {font-family: "Segoe UI", "Microsoft Sans Serif"}
.style18 {font-size: 18px; font-weight: bold; font-family: "Segoe UI", "Microsoft Sans Serif"; }
-->
</style>
<script type="text/javascript">
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
</script>
</head>
<body onLoad="MM_preloadImages('img/101.png')">
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
          <p align="center">&nbsp; </p>
          <table width="892"  border="1" cellpadding="2" cellspacing="2" bordercolor="#669933">
            <tr>
                <td width="28"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style12 style17"><span class="style10">ID</span></div></td>
              <td width="115"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style12 style17"><span class="style10">ItemName</span></div></td>
              <td width="133"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style12 style17"><span class="style10">Description</span></div></td>
              <td width="77"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style12 style17"><span class="style10">Size</span></div></td>
              <td width="130"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style12 style17"><span class="style10">Image</span></div></td>
              <td width="70"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style12 style17"><span class="style10">Price</span></div></td>
              <td width="81"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style12 style17"><span class="style10">Discount</span></div></td>
              <td width="74"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style12 style17"><span class="style10">Total</span></div></td>
              <td width="108"  bordercolor="#669933" bgcolor="#00CCFF"><div align="center" class="style12 style17"><span class="style10">Add to Cart</span></div></td>
            <strong></strong> </tr>
               <?php
			    $Id=$_GET['CategoryId'];
include('shop.php');
// Specify the query to execute
$sql = "SELECT ItemId, ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item_master WHERE CategoryId =".$Id."";
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
                 <td class="style17"><div align="center" class="style17"><?php echo $ItemId ?></div></td>
                <td class="style17"><div align="center" class="style17"><?php echo $ItemName ?></div></td>
                <td class="style17"><div align="center" class="style17"><?php echo $Description ?></div></td>
                <td class="style17"><div align="center" class="style17"><?php echo $Size ?></div></td>
                <td><div align="center" class="style16"><img src="./Products/<?php echo $Image ?>" height="125px" width="125px"/></div></td>
                <td class="style17"><div align="center" class="style17"><?php echo $Price ?></div></td>
                <td class="style17"><div align="center" class="style17"><?php echo $Discount ?></div></td>
                <td class="style17"><div align="center" class="style17"><?php echo $Total ?></div></td>
                <td><div align="center" class="style16"><a href="InsertCart.php?ItemId=<?php echo $ItemId; ?>"><img src="img/85.png""/></a></div></td>
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
