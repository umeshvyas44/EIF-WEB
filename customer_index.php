<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<html>
<head>
<title>Customer Index</title>

<link href="style.css" rel="stylesheet" type="text/css" />


<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style6 {
	font-size: xx-large;
	font-family: "Segoe Script", "Segoe UI", "Segoe UI Light", "Segoe UI Semibold", "Segoe UI Symbol";
}
.style9 {color: #CC3300}
.style10 {
	font-family: "Segoe UI", "Microsoft Sans Serif";
	font-weight: bold;
	font-size: 14px;
}
.style11 {
	font-family: "Segoe UI", "Microsoft Sans Serif";
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
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style14 {
	font-size: 18px;
	color: #000000;
}
.style15 {font-family: "Segoe UI", "Microsoft Sans Serif"}
-->
</style>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
</head>
<body onLoad="MM_preloadImages('img/76.jpg')">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">ETHNIC<span> INDIAN FASHION</span><small><center>Be a Traditional</center></small></a></h1>      </div>
      <div class="menu_nav">
        <ul>
           <li class="active"><a href="cus_index.php">Home</a></li>
          <li><a href="cus_products.php">Products</a></li>
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
      <div class="mainbar">
        <div class="article style6">   
          <p><span class="style6">Welcome <span class="style9"><?php echo $_SESSION['Name'];?></span></span>&nbsp;</p>
          <table width="603" height="67" border="1">
            <tr>
              <td width="81" height="32" class="style10"><div align="left">Name </div></td>
              <td width="506"><?php echo $_SESSION['Name'];?></td>
            </tr>
            <tr>
              <td width="81" class="style10"><div align="left">Mobile </div></td>
              <td> <?php echo $_SESSION['Mobile'];?></td>
              </tr>
            <tr>
              <td width="81" class="style10"><div align="left">UserName  </div></td>
              <td><?php echo $_SESSION['UserName'];?></td>
               </tr>
            
            <tr>
              <td height="27" class="style10"><div align="left">Address </div></td>
              <td><?php echo $_SESSION['Address'];?></td>
               </tr>
               <tr>
              <td class="style10"><div align="left">City </div></td>
              <td> <?php echo $_SESSION['City'];?></td>
              <tr>
              <td class="style10"><div align="left">Email </div></td>
               <td><?php echo $_SESSION['Email'];?></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <div id="CollapsiblePanel1" class="CollapsiblePanel">
            <div class="CollapsiblePanelTab style14" tabindex="0">Edit User Details</div>
            <div class="CollapsiblePanelContent"><form method="post" enctype="multipart/form-data" name="form2" id="form2" action="EditUser.php">
              <table width="563" border="1">
                <tr>
                  <td width="152" class="style10"><div align="left">Customer Name</div></td>
                  <td width="395"><div align="left"><span id="sprytextfield569">
                    <input type="text" name="text1" id="text1" value="<?php echo $_SESSION['Name'];?>">
                    <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
                </tr>
                <tr>
                  <td class="style10"><div align="left">Address:</div></td>
                  <td><div align="left"><span id="sprytextarea1">
                    <textarea name="EidtAddress"  id="EidtAddress" spry:content="<?php echo $_SESSION['Address'];?>" cols="31" rows="3" ><?php echo $_SESSION['Address'];?></textarea>
                    <span class="textareaRequiredMsg">A value is required.</span></span></div></td>
                </tr>
                <tr>
                  <td class="style10"><div align="left">City</div></td>
                  <td><div align="left"><span id="spryselect1">
                    <select name="EditCity" id="EditCity">
                     <option value="Ahmedabad">Ahmedabad</option>
                          <option value="Vadodara">Vadodara</option>
                          <option value="Mehsana">Mehsana</option>
                          <option value="Patan">Patan</option>
                          <option value="Surendranagar">Surendranagar</option>
                    </select>
                    <span class="selectRequiredMsg">Please select an item.</span></span></div></td>
                </tr>
                <tr>
                  <td class="style10"><div align="left">Email ID</div></td>
                  <td><div align="left"><span id="sprytextfield3">
                  <input type="text" name="EditEmail" id="EditEmail" value="<?php echo $_SESSION['Email'];?>">
                  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div></td>
                </tr>
                <tr>
                  <td class="style10"><div align="left">Mobile Number</div></td>
                  <td><div align="left"><span id="sprytextfield4">
                  <input type="text" name="EditMobile" id="EditMobile" value="<?php echo $_SESSION['Mobile'];?>">
                  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></td>
                </tr>
                <tr>
                  <td class="style10"><div align="left">Gender</div></td>
                  <td><div align="left"><span id="spryselect2">
                    <select name="EditGender" id="EditGender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <span class="selectRequiredMsg">Please select an item.</span></span></div></td>
                </tr>
                /*<tr>
                  <td class="style10"><div align="left">Birth Date</div></td>
                  <td><div align="left"><span id="sprytextfield5">
                  <input type="text" name="EditBirthdate" id="EditBirthdate" >
                  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div></td>
                </tr>*/
                <tr>
                  <td class="style10"><div align="left">User Name</div></td>
                  <td><div align="left"><span id="sprytextfield7">
                    <input type="text" name="EditUername" id="EditUername" value="<?php echo $_SESSION['UserName'];?>">
                    <span class="textfieldRequiredMsg">A value is required.</span></span></div></td>
                </tr>
                <tr>
                  <td class="style10"><div align="left">Password</div></td>
                  <td><div align="left"><span id="sprytextfield6">
                  <input type="password" name="EditPassword" id="EditPassword">
                  <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="left">
                    <input type="submit" name="OK" id="OK" value="Submit">
                  </div></td>
                </tr>
              </table>
              </form>
            </div>
          </div>
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
      <div class="sidebar">
        <div class="gadget">
          <h2 align="center" class="star">Catagory</h2>
          <div>
            <div id="right-col">
              <div class="scroll"> 
               <div id="right-col">
    

    <div class="scroll">
       <ul class="side">
           <span class="style11">
           <?php
include('shop.php');
// Specify the query to execute
$sql = "select * from Category_Master";
// Execute query
$result = mysql_query($sql);
$del = "delete from Shopping_Cart_Final where CustomerID=".$_SESSION['ID']."";
	mysql_query ($del,$con);
	$dsql = "delete from Shopping_Cart where CustomerID=".$_SESSION['ID']."";
	// execute query
	mysql_query ($dsql);
	
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];

?>
           </span>
           <li class="style11"><a href="cus_product.php?CategoryId=<?php echo $Id;?>" class="style10"><?php echo $CategoryName;?></a></li>

           <span class="style11">
           <?php
	}

?>
           </span>
     </li>
       </ul>
    
  </div>
   
    </div>
 
              </div>
              </div>
          </div>
        </div>
        <div class="gadget"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','img/76.jpg',1)"><img src="img/75.jpg" name="Image2" width="180" height="240" border="0" id="Image2" /></a></div>
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
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield569");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {minChars:10, maxChars:10});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "date", {format:"yyyy-mm-dd"});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {minChars:6});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>