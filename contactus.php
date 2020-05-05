
<html>
<head>
<title>Contact us</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:347px;
	top:378px;
	width:187px;
	height:239px;
	z-index:1;
}
#Layer2 {
	position: absolute;
	left: 535px;
	top: 472px;
	width: 430px;
	height: 317px;
	z-index: 2;
}
.style1 {color: #3399CC}
#Layer3 {
	position: absolute;
	left: 340px;
	top: 466px;
	width: 166px;
	height: 371px;
	z-index: 3;
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
<body onLoad="MM_preloadImages('img/5.jpg')">
<div id="Layer2">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1835.9663656080575!2d72.45720190000695!3d23.0262419999926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9bbd93a8c8d7%3A0xda1fe0afeccb768!2sIndraprasth+Bunglows!5e0!3m2!1sen!2sin!4v1564234595429!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  <br /></div>
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
          <li><a href="show_products.php">Products</a></li>
          <li class="active"><a href="contactus.php">Contact us</a></li>
        
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
          <h2 align="center">About us </h2>
          <div class="clr">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div>
        </div>
        <div class="article"></div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <div>
		  
          <p align="center"><a href="index.php"><strong> LOGIN Or Sign up </strong></a></p>
          </div>
        </div>
        <div class="gadget">
          <h2 align="center" class="star">Category</h2>
          <div>
            <ul class="side">
              <?php
include('shop.php');
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
              <li><a href="products.php?CategoryId=<?php echo $Id;?>"><?php echo $CategoryName;?></a></li>
              <?php
	}
// Close the connection

?>
            </ul>
          </div>
        </div>
        <div class="gadget">
          <p><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','img/5.jpg',1)"><img src="img/6.jpg" name="Image2" width="180" height="240" border="0" id="Image2" /></a></p>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize"></div>
  </div>
</div>
</body>
</html>