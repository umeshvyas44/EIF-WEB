<?php
include('shop.php');
session_start();
ob_start();
if(isset($_SESSION['AdminId']))
{

}
else
{
header('location:index.php');
}

?>

<html>
<head>
<title>all feedback</title>

<link href="style.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style10 {font-weight: bold}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style11 {color: #FFFFFF}
.style12 {
	font-weight: bold
}
.style13 {
	font-weight: normal
}
.style14 {
	font-weight: normal
}
.style15 {
	font-weight: normal
}
.style16 {font-weight: bold}
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
<body onLoad="MM_preloadImages('img/13.jpg')">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
     <h1><a href="admin_index.php">ETHNIC<span> INDIAN FASHION</span><small><center>Be a Traditional</center></small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
           <li><a href="admin_index.php">Home</a></li>
          <li><a href="add_catagory.php">Category</a></li>
          <li><a href="order.php">Orders</a></li>
          <li class="active"><a href="allfeed.php">Feedback</a></li>
          <li><strong><a href="logout.php"><font color="#FF0000">Logout</font></a></strong></li>
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
          <h2 align="center">All Feedbacks</h2>
  
            <table width="100%" border="1" align="center" bordercolor="#00FF00" >
              <tr bgcolor="#00CCFF">
                <th height="32" class="style10"><div align="left" class="style9 style5 style11">
                  <div align="center"><strong>Id</strong></div>
                </div></th>
                <th class="style10"><div align="left" class="style9 style5 style11">
                  <div align="center"><strong>Customer Name</strong></div>
                </div></th>
                <th class="style10"><div align="left" class="style9 style5 style11">
                  <div align="center"><strong>Feedback</strong></div>
                </div></th>
                <th class="style10"><div align="left" class="style9 style5 style11">
                  <div align="center"><strong>Date</strong></div>
                </div></th>
                <th class="style10"><div align="left" class="style12 style11">
                  <div align="center">Delete</div>
                </div></th>
              </tr>
              <?php

$sql = "select Feedback_Master.FeedbackId,Customer_Registration.CustomerName,Feedback_Master.Feedback,Feedback_Master.Date from Feedback_Master,Customer_Registration where Feedback_Master.CustomerId=Customer_Registration.CustomerId";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['FeedbackId'];
$Name=$row['CustomerName'];
$Feedback=$row['Feedback'];
$Date=$row['Date'];

?>
              <tr bgcolor="#95EAFF">
                <td class="style9"><div align="left" class="style9 style5 style12">
                  <div align="center"><?php echo $Id;?></div>
                </div></td>
                <td class="style9"><div align="left" class="style9 style5 style13">
                  <div align="center"><?php echo $Name;?></div>
                </div></td>
                <td class="style9"><div align="left" class="style9 style5 style14">
                  <div align="center"><?php echo $Feedback;?></div>
                </div></td>
                <td class="style9"><div align="left" class="style9 style5 style15">
                  <div align="center"><?php echo $Date;?></div>
                </div></td>
                <td class="style9"><div align="left" class="style9 style5 style16">
                  <div align="center"><a href="DeleteFeedback.php?FeedbackId=<?php echo $Id;?>">Delete</a></div>
                </div></td>
              </tr>
              <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
              <tr bgcolor="#9FECFF">
                <td colspan="5" class="style9"><div align="left" class="style12">
                  <div align="center"><?php echo "Total ".$records." Records"; ?> </div>
                </div></td>
              </tr>
              <?php
// Close the connection

?>
          </table>
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
// Close the connection

?>
</ul>
              </div>
            </div>
          </div>
        </div>
        <div class="gadget"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','img/13.jpg',1)"><img src="img/32.jpg" name="Image2" width="180" height="240" border="0" id="Image2" /></a></div>
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