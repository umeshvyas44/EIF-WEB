<?php include('shop.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_Recordset1 = "-1";
if (isset($_GET['CustomerId'])) {
  $colname_Recordset1 = $_GET['CustomerId'];
}

$query_Recordset1 = sprintf("SELECT CustomerName, Address, City, Email, Mobile, Gender FROM customer_registration WHERE CustomerId = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1);
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>detail</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style14 {color: #FF0000}
.style15 {color: #00FFFF}
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
<body onload="MM_preloadImages('img/52.jpg')">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
         <h1><a href="index.html">ETHNIC<span> INDIAN FASHION</span><small><center>Be a Traditional</center></small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="admin_index.php">Home</a></li>
          <li><a href="add_catagory.php">Catagory</a></li>
          <li><a href="order.php">Orders</a></li>
          <li><a href="allfeed.php">Feedback</a></li>
          <li><a href="logout.php"><span class="style14"><b>Logout</b></span></</a></li>
          
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
          <h2 align="center">Order Records </h2>
        
            <p>
          <table width="100%" border="0" bordercolor="#00FF99"> 
      <tr bgcolor="#00CCFF"><td width="20%"><div align="left"></div>
      </tr>
      <?php do { ?>
        <tr bgcolor="#66FFFF">
         <td bgcolor="#00CCFF"><div align="left"><strong>CustomerName</strong></div></td> 
        <td width="80%" bgcolor="#99CCFF"><div align="left"><?php echo $row_Recordset1['CustomerName']; ?></div></td></tr>
        <tr>  <td bgcolor="#00CCFF"><div align="left"><strong>Address</strong></div></td>  
        <td bgcolor="#99CCFF"><div align="left"><?php echo $row_Recordset1['Address']; ?></div></td></tr>
        <tr> <td bgcolor="#00CCFF"><div align="left"><strong>City</strong></div></td> 
        <td bgcolor="#99CCFF"><div align="left"><?php echo $row_Recordset1['City']; ?></div></td></tr>
       <tr>  <td bgcolor="#00CCFF"><div align="left"><strong>Email</strong></div></td> 
       <td bgcolor="#99CCFF"><div align="left"><?php echo $row_Recordset1['Email']; ?></div></td></tr>
        <tr> <td bgcolor="#00CCFF"><div align="left"><strong>Mobile</strong></div></td>  
        <td bgcolor="#99CCFF"><div align="left"><?php echo $row_Recordset1['Mobile']; ?></div></td></tr>
        <tr> <td bgcolor="#00CCFF"><div align="left"><strong>Gender</strong></div></td> 
        <td bgcolor="#99CCFF"><div align="left"><?php echo $row_Recordset1['Gender']; ?></div></td>
        </tr>
        <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
    </table>
        </div>
        <div class="article style15"></div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 align="center" class="star">Catagory</h2>
          <div class="clr">
            <div class="clr">
              <div id="right-col">
                
                  <?php
// Establish Connection with Database

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
             
                <p> <a href="add_products.php?CategoryId=<?php echo $Id;?>"><?php echo $CategoryName;?></a></p>
                <?php
	}
// Close the connection

?>
              </div>
            </div>
            </div>
        </div>
        <div class="gadget"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','img/52.jpg',1)"><img src="img/51.jpg" name="Image2" width="180" height="240" border="0" id="Image2" /></a></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
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
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
//-->
</script>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>