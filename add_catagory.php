<?php
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
<title>add category</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style11 {font-weight: bold}
.style9
 {
	font-size: 95%;
	font-weight: normal;
	color: #FFFFFF;
	font-family: "Segoe UI", "Microsoft Sans Serif";
}
-->
</style>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
<style type="text/css">
<!--
.style12 {
	font-family: "Segoe UI Light"
}
.style13 {
	color: #000000;
	font-weight: normal;
	font-family: "Segoe UI", "Microsoft Sans Serif";
}
.style14 {color: #000000}
.style15 {
	color: #000066;
	font-family: "Segoe UI Light";
	font-style: normal;
	font-weight: bold;
}
.style16 {
	font-size: 14px;
	font-weight: bold;
}
.style19 {
	font-family: "Segoe UI", "Microsoft Sans Serif";
	font-size: 14px;
	color: #000066;
}
.style20 {font-family: "Segoe UI", "Microsoft Sans Serif"}
.style21 {
	color: #FFFFFF;
	font-family: "Segoe UI", "Microsoft Sans Serif";
	font-size: 95%;
	font-weight: bold;
}
.style24 {
	color: #000000;
	font-family: "Segoe UI", "Microsoft Sans Serif";
	font-weight: normal;
}
.style27 {
	font-size: 14px;
	font-weight: bold;
}
.style29 {
	color: #FFFFFF;
	font-family: "Segoe UI", "Microsoft Sans Serif";
	font-weight: bold;
}
.style31 {
	font-size: 95%;
	font-family: Arial, Helvetica, sans-serif;
}
.style32 {
	font-size: 14px;
	font-weight: bold;
}
.style33 {
 color: #FFFFFF; 
 font-family: "Segoe UI", "Microsoft Sans Serif";
 font-size: 14px;
 font-weight: bold; }
-->
</style>
</head>
<body onLoad="MM_preloadImages('img/67.jpg','img/101.png')">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="admin_index.php">ETHNIC<span> INDIAN FASHION</span><small><center>Be a Traditional</center></small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="admin_index.php">Home</a></li>
          <li class="active"><a href="add_catagory.php">Category</a></li>
          <li><a href="order.php">Orders</a></li>
          <li><a href="allfeed.php">Feedback</a></li>
          <li><a href="logout.php"><font color="#FF0000"><b>Logout</b></font></a></li>
          
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
          <h2 align="center">Add Category</h2>
        
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr bgcolor="#00CCFF">
                <td height="27"><span class="style9 style32"><strong>Create New Category</strong></span></td>
              </tr>
			  <form action="InsertCategory.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <tr>
                <td height="26"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="32" class="style19" ><div align="left" class="style19">Category Name:</div></td>
                      <td><span id="sprytextfield3">
                        <label>
                        <div align="left">
                          <input type="text" name="txtName" id="txtName" />
                        </div>
                        </label>
                        <span class="textfieldRequiredMsg">Enter Category.</span></span></td>
                    </tr>
                    <tr>
                      <td height="34"><div align="left"><span class="style19">Description:</span></div></td>
                      <td><span id="sprytextarea1">
                        <label>
                        <div align="left">
                          <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                        </div>
                        </label>
                        <span class="textareaRequiredMsg">Enter Description</span></span></td>
                    </tr>
                    <tr>
                      <td height="34"><div align="left"><span class="style19">Upload Image:</span></div></td>
                      <td><label>
                        <div align="left">
                          <input type="file" name="txtFile" id="txtFile" />
                        </div>
                      </label></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <div align="left">
                          <input type="submit" name="button" id="button" value="Submit" />
                        </div>
                      </label><p>&nbsp;</p></td>
                    </tr>
</table></td>
              </tr></form>
              <tr bgcolor="#00CCFF">
                <td height="25" class="style33">Category List</td>
              </tr>
              <tr>
                <td><table width="100%" border="1" bordercolor="#003300" >
                    <tr bgcolor="#0099FF" class="style9">
                      <th height="32" bgcolor="#00CCFF" class="style11"><div align="left" class="style5 style20 style21 style32">
                        <div align="center"><strong>Id</strong></div>
                      </div></th>
                      <th bgcolor="#00CCFF" class="style11"><div align="left" class="style21 style5 style32"><strong>Category Name</strong></div></th>
                      <th bgcolor="#00CCFF" class="style11" align="center"><div align="left" class="style9 style5 style32">
                        <center class="style29">
                          Description
                        </center>
                      </div></th>
                      <th bgcolor="#00CCFF" class="style11"><div align="left" class="style9 style5 style32"><strong>Edit</strong></div></th>
                      <th bgcolor="#00CCFF" class="style11"><div align="left" class="style33">Delete</div></th>
                  </tr>
                    <?php
include('shop.php');
$sql = "select * from Category_Master";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];
$Description=$row['Description'];

?>
                    <tr>
                      <td class="style11"><div align="left" class="style9 style5">
                        <div align="center" class="style13"><?php echo $Id;?></div>
                      </div></td>
                      <td class="style11"><div align="left" class="style9 style5">
                        <div align="center" class="style13"><?php echo $CategoryName;?></div>
                      </div></td>
                      <td class="style11"><div align="left" class="style9 style5 style14">
                        <div align="center" class="style24"><?php echo $Description;?></div>
                      </div></td>
                      <td class="style11"><div align="left" class="style9 style5">
                        <div align="center"><a href="EditCategory.php?CatId=<?php echo $Id;?>">Edit</a></div>
                      </div></td>
                      <td class="style11"><div align="left" class="style9 style5">
                        <div align="center"><a href="DeleteCategory.php?CatId=<?php echo $Id;?>">Delete</a></div>
                      </div></td>
                    </tr>
                    <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                    <tr>
                      <td colspan="5" class="style11"><div align="left">
                        <div align="left" class="style15"><?php echo "Total ".$records." Records"; ?></div>
                      </div></td>
                    </tr>
                    <?php
// Close the connection

?>
                </table></td>
              </tr>
              <tr>
                <td height="26"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
                </table></td>
              </tr>
          </table></div>
        <div class="article"></div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 align="center" class="star">Category</h2>
          <div>
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
            
              <li class="style14 style12 style16"> <a href="add_products.php?CategoryId=<?php echo $Id;?>" class="style14 style15 style12 style27 style27"><strong><?php echo $CategoryName;?></strong></a></li>
            
              <span class="style14 style12 style16">
              <?php
	}
// Close the connection

?>
              </span>                                                                                                  
                                                                                                                                                                     </ul>
          </div>
        </div>
        <div class="gadget"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','img/67.jpg',1)"><img src="img/62.jpg" name="Image2" width="180" height="240" border="0" id="Image2" /></a></div>
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
<?php
ob_flush();
?>