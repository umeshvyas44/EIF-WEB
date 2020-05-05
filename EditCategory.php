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
<title>edit category</title>

<link href="style.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #FF0099}
.style4 {color: #CC0099}
.style10 {color: #FFFFFF}
.style11 {font-weight: bold}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style13 {color: #192666}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
-->
</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="admin_index.php">Garment<span>Shop</span><small>The Online Shopping Cart</small></a></h1></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="add_catagory.php">Category</a></li>
          <li><a href="order.php">Orders</a></li>
          <li><a href="allfeed.php">Feedback</a></li>
          <li><a href="logout.php">Logout</a></li>
          
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
          <h2 align="center">Edit Category</h2>
        
            <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="33" bgcolor="#0099FF"><span class="style10 style11 style12">Edit Record</span></td>
              </tr>
              <tr>
                <td><?php
$Id=$_GET['CatId'];
include('shop.php');
// Specify the query to execute
$sql = "select * from Category_Master where CategoryId=".$Id."";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CategoryId'];
$Name=$row['CategoryName'];
$Description=$row['Description'];
}
?>
                    <form method="post" action="UpdateCategory.php">
                      <table width="100%" border="0">
                        <tr>
                          <td height="32"><span class="style8">Category Id:</span></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <div align="left">
                              <input name="txtId" type="text" id="txtId" value="<?php echo $Id;?>" />
                            </div>
                          </label>
                            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td height="36"><span class="style8">Category Name:</span></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <div align="left">
                              <input name="txtName" type="text" id="txtName" value="<?php echo $Name;?>" />
                            </div>
                          </label>
                            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td height="36"><span class="style8">Description:</span></td>
                          <td><span id="sprytextfield3">
                            <label>
                            <div align="left">
                              <textarea name="txtDesc" id="txtDesc" cols="45" rows="3" ><?php echo $Description;?></textarea>
                            </div>
                          </label>
                            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td><input type="submit" name="submit" value="Update Record" /></td>
                        </tr>
                      </table>
                    </form>
                  <?php
// Close the connection

?>
                </td>
              </tr>
              <tr>
                <td></td>
              </tr>
            </table>
          <p>&nbsp;</p></div>
        <div class="article"></div>
      </div>
      <div class="sidebar">
        <div class="gadget"></div>
        <div class="gadget">
          <h2 align="center" class="star">Category</h2>
          <div>
          <ul>
                  <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("shopping", $con);
// Specify the query to execute
$sql = "select * from Category_Master";
// Execute query
$result = mysql_query($sql,$con);
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
mysql_close($con);
?>
</ul>
          </div>
        </div>
        <div class="gadget">
          <div class="clr"></div>
        </div>
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
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>
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
ob_flush();
?>