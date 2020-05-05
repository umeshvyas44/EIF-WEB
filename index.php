
<html>
<head>
<title>Garment Shop</title>

<link href="style.css" rel="stylesheet" type="text/css" />


<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>


<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(images/18516-vintage-pattern-1280x800-abstract-wallpaper.jpg);
}
-->
</style></head>
<body onLoad="MM_preloadImages('img/101.png','img/2.jpg')">
<div>
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.php">ETHNIC<span> INDIAN FASHION</span><small><center>Be a Traditional</center></small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
           <li class="active"><a href="index.php">Home</a></li>
          <li><a href="show_catagory.php">Catagory</a></li>
          <li><a href="show_products.php">Products</a></li>
          <li><a href="contactus.php">Contact us</a></li>
        </ul>
      </div>
   
    </div>
  </div>
  <div>
    <div>
      <div><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','img/101.png',1)"><img src="img/100.png" alt="Sorry" width="1350" height="240" id="Image4" /></a></div>
      <div class="mainbar" style="margin-right: 200px;">
      <p>&nbsp;</p>
        <div>
        
          <div id="Accordion1" class="Accordion" tabindex="0">
            <div class="AccordionPanel">
              <div class="AccordionPanelTab" spry:select="Accordion" spry:selected="">LOGIN</div>
              <div class="AccordionPanelContent"><div>
            <div> 
            <form name="form1" method="post" action="login.php">
              <p align="center">Username : <span id="sprytextfield1">
              <input type="text" name="un" id="un" />
              <span class="textfieldRequiredMsg">A value is required.</span></span>              </p>
              <p align="center">PassWord :
                <span id="sprytextfield2">
                <input type="password" name="ps" id="ps" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></p>
                <label>
                </label>

                <p align="center">	
                 
                               <label>
                <input type="radio" name="rdType" value="Admin" id="rdType_0">
                Admin</label>
              <br>
             &nbsp; &nbsp; &nbsp;<label>
                <input type="radio" name="rdType" value="Customer" id="rdType_1">
                Customer</label>
 
                </p>
              
 <center>
                <label>
                <input type="submit" name="Submit" id="Submit" value="Submit" />
                </label>
 </center>   </form>
              </div>
          </div></div>
            </div>
			
            <div class="AccordionPanel">
              <div class="AccordionPanelTab">Sign up</div>
              <div class="AccordionPanelContent">
                <form action="insert_user.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
                  <table width="643" border="0" align="left">
                    <tr>
                      <td width="152">Customer Name</td>
                      <td width="481"><span id="sprytextfield3">
                        <label for="text2"></label>
                        <input type="text" name="txtName" id="txtName" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                    </tr>
                    <tr>
                      <td height="69">Address</td>
                      <td><span id="sprytextarea1">
                        <label for="textarea1"></label>
                        <textarea name="txtAddress" id="txtAddress" cols="35" rows="5"></textarea>
                        <span class="textareaRequiredMsg">A value is required.</span></span></td>
                    </tr>
                    <tr>
                      <td>City</td>
                      <td><span id="spryselect1">
                        <select name="cmbCity" id="cmbCity">
                          <option value="Ahmedabad">Ahmedabad</option>
                          <option value="Vadodara">Vadodara</option>
                          <option value="Mehsana">Mehsana</option>
                          <option value="Patan">Patan</option>
                          <option value="Surendranagar">Surendranagar</option>
                        </select>
                        <span class="selectRequiredMsg">Please select an item.</span></span></td>
                    </tr>
                    <tr>
                      <td>Email ID</td>
                      <td><span id="sprytextfield4">
                        <input type="text" name="txtEmail" id="txtEmail" />
                        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
                    </tr>
                    <tr>
                      <td>Mobile Number</td>
                      <td><span id="sprytextfield5">
                        <input type="text" name="txtMobile" id="txtMobile" />
                        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span></td>
                    </tr>
                    <tr>
                      <td>Gender</td>
                      <td><span id="spryselect2">
                        <select name="rdGender" id="rdGender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        <span class="selectRequiredMsg">Please select an item.</span></span></td>
                    </tr>
                    <tr>
                      <td>Birth Date</td>
                      <td><span id="sprytextfield6">
                        <input type="text" name="txtDate" id="txtDate" />
                        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
                    </tr>
                    <tr>
                      <td>User Name</td>
                      <td><span id="sprytextfield7">
                        <label for="text6"></label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td><span id="sprytextfield8">
                        <label for="text7"></label>
                        <input type="password" name="txtPassword" id="txtPassword" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="Submit2" id="Submit2" value="Submit" /></td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>
		  
        </div>
        <div></div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 align="center">Catagory</h2>
          <div>
            <div>
              <div>
                <ul>
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
                  <li>
                  <a href="products.php?CategoryId=<?php echo $Id;?>">
                  <?php echo $CategoryName;?>
                  </a>
                  </li>
                  <?php
	}

?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="gadget">
          <p><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','img/2.jpg',1)"><img src="img/1.jpg" name="Image2" width="180" height="240" border="0" id="Image2" /></a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="clr">
    
  </div>
  <div class="footer">
    <div class="footer_resize">
      
    </div>
  </div>
</div>
<script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur", "change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer", {minChars:10});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "date", {format:"yyyy-mm-dd"});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
//-->
</script>
</body>
</html>