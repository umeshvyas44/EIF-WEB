
<?php include('shop.php');?>
<html>
<head>
<title>Show Products</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<style type="text/css">
<!--
body {
	background-image: url(images/18516-vintage-pattern-1280x800-abstract-wallpaper.jpg);
}
.style12 {
	font-size: 14px;
	font-family: "Segoe UI", "Microsoft Sans Serif";
	font-weight: bold;
}
.style14 {color: #FFFFFF; font-weight: bold; font-family: "Segoe UI", "Microsoft Sans Serif"; }
.style15 {font-family: "Segoe UI", "Microsoft Sans Serif"}
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
<body onLoad="MM_preloadImages('img/2.jpg')">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">ETHNIC<span> INDIAN FASHION</span><small><center>Be a Traditional</center></small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
           <li><a href="index.php">Home</a></li>
          <li><a href="show_catagory.php">Catagory</a></li>
          <li class="active"><a href="show_products.php">Products</a></li>
         
          <li><a href="contactus.php">Contact us</a></li>
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
          <h2 align="center">Products</h2>
          <p align="center">&nbsp;</p>
          <div>
            <table width="100%" border="1" cellpadding="1" cellspacing="1">
              <tr>
                <td height="28" width="15%" bordercolor="#669933" bgcolor="#00CCFF"><span class="style14">ItemName</span></td>
                <td bordercolor="#669933" width="30%" bgcolor="#00CCFF"><span class="style14">Description</span></td>
                <td bordercolor="#669933" width="5%" bgcolor="#00CCFF"><span class="style14">Size</span></td>
                <td bordercolor="#669933" width="20%" bgcolor="#00CCFF"><span class="style14">Image</span></td>
                <td bordercolor="#669933" width="10%" bgcolor="#00CCFF"><span class="style14">Price</span></td>
                <td bordercolor="#669933" width="10%" bgcolor="#00CCFF"><span class="style14">Discount</span></td>
                <td bordercolor="#669933" width="10%" bgcolor="#00CCFF"><span class="style14">Total</span></td>
              </tr>
               <?php

// Specify the query to execute
$sql = "select * from item_master";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$ItemName=$row['ItemName'];
$Description=$row['Description'];
$Image=$row['Image'];
$Size=$row['Size'];
$Price=$row['Price'];
$Discount=$row['Discount'];
$Total=$row['Total'];
?>
             
              <tr>
                <td><span class="style15"><?php echo $ItemName;?></span></td>
                <td><span class="style15"><?php echo $Description; ?></span></td>
                <td><span class="style15"><?php echo $Size; ?></span></td>
                <td><img src="Products/<?php echo $Image;?>" alt="1" width="125px" height="125px"/></td>
                <td><span class="style15"><?php echo $Price; ?></span></td>
                <td><span class="style15"><?php echo $Discount ;?></span></td>
                <td><span class="style15"><?php echo $Total ;?></span></td>
              </tr>
		 <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
            </table>
          </div>
		 
        </div>
        <div class="article"></div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <div>
            <p align="center"><a href="index.php" class="style12">LOGIN Or Sign up </a></p>
          </div>
        </div>
        <div class="gadget">
          <h2 align="center" class="star">Catagory</h2>
         <div>
            <ul class="side">	
            
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
              <ul>
                <ul>
                  <li><a href="products.php?CategoryId=<?php echo $Id;?>"><?php echo $CategoryName;?></a></li>
                </ul>
              </ul>
             
	<?php
	}?>


            </ul>
          </div>
        </div>
        <div class="gadget">
          <p><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','img/2.jpg',1)"><img src="img/7.jpg" name="Image4" width="180" height="240" border="0" id="Image" /></a></p>
        </div>
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
 