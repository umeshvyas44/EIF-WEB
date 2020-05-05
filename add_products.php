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
<title>Add Products</title>

<link href="style.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #FF0099}
.style4 {color: #CC0099}
.style12 {color: #FFFFFF; font-weight: bold; }
-->
</style>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
           <li><a href="admin_index.php">Home</a></li>
          <li><a href="add_catagory.php">Category</a></li>
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
      <div class="fbg_resize">
        <div class="article">
          <h2 align="center">Add Products</h2>
        <form action="InsertProduct.php?CategoryId=<?php echo $_GET['CategoryId'];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <table width="100%" height="364" border="0" cellpadding="0" cellspacing="0">
             
                <td><table width="100%" height="301" border="0" cellpadding="0" cellspacing="0">
            <tr>
                      <td height="40"><div align="center">Item Name:</div></td>
                  <td ><span id="sprytextfield3">
            <label>
                        <input type="text" name="txtName" id="txtName" />
                        </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                    <tr>
                      <td height="66"><div align="center">Description:</div></td>
                    <td ><span id="sprytextarea1">
            <label>
                        <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                        </label>
                        <span class="textareaRequiredMsg">A value is required.</span></span></td>
                  </tr>
                    <tr>
                      <td ><div align="center">Upload Image:</div></td>
                <td><label>
                        <input type="file" name="txtFile" id="txtFile" />
                      </label></td>
                  </tr>
                    <tr>
                      <td ><div align="center">Size:</div></td>
                    <td ><span id="sprytextfield4">
            <label>
                        <input type="text" name="txtSize" id="txtSize" />
                        </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                    <tr>
                      <td ><div align="center">Price:</div></td>
                    <td ><span id="sprytextfield5">
            <label>
                        <input type="text" name="txtPrice" id="txtPrice" />
                        </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                    <tr>
                      <td><div align="center">Discount:</div></td>
                    <td><span id="sprytextfield6">
            <label>
                        <input type="text" name="txtDiscount" id="txtDiscount" />
                        </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                    <tr>
                      <td ><div align="center">Final Price:</div></td>
                    <td ><span id="sprytextfield7">
            <label>
                        <input type="text" name="txtFinal" id="txtFinal" />
                        </label>
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                    <tr>
                      <td>&nbsp;</td>
                <td ><label>
                        <input type="submit" name="button" id="button" value="Submit" />
                      </label></td>
                  </tr>
</table>
                </form></td>
              </tr>
              <tr>
                <td>&nbsp;
                    <table border="1" cellpadding="2" cellspacing="2" bordercolor="#003300">
                      <tr>
                        <td width="114" bgcolor="#0099FF"><span class="style12">ItemId</span></td>
                        <td width="137" bgcolor="#0099FF"><span class="style12">ItemName</span></td>
                        <td width="103" bgcolor="#0099FF"><span class="style12">Size</span></td>
                        <td width="125" bgcolor="#0099FF"><span class="style12">Image</span></td>
                        <td width="109" bgcolor="#0099CC"><span class="style12">Price</span></td>
                        <td width="129" bgcolor="#0099FF"><span class="style12">Discount</span></td>
                        <td width="173" bgcolor="#0099FF"><span class="style12">Total</span></td>
                      </tr>
                      <?php
					  include('shop.php');
			    $Id=$_GET['CategoryId'];


// Specify the query to execute
$sql = "SELECT ItemId, ItemName, Size, Image, Price, Discount, Total FROM item_master WHERE CategoryId = ".$Id."";
// Execute query
$result = mysql_query($sql);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$ItemId=$row['ItemId'];
$ItemName=$row['ItemName'];
$Image=$row['Image'];
$Size=$row['Size'];
$Price=$row['Price'];
$Discount=$row['Discount'];
$Total=$row['Total'];
?>
                      <tr>
                        <td><?php echo $ItemId ?></td>
                        <td><?php echo $ItemName ?></td>
                        <td><?php echo $Size ?></td>
                        <td><img src="./Products/<?php echo $Image ?>" height="125px" width="125px"/></td>
                        <td><?php echo $Price ?></td>
                        <td><?php echo $Discount ?></td>
                        <td><?php echo $Total ?></td>
                      </tr>
                       <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?> 

                  </table>
         
		  
        </div>
        <div class="article"></div>
      </div>
	  <div class="clr"></div>
    </div>
  </div>
 
  <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
//-->
</script>
</body>
</html>
<?php
ob_flush();
?>