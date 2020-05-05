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
<title>Admin Index</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style9 {
	font-size: 95%;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>

<script type="text/javascript">
<!--

//-->
</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
   <h1><a href="admin_index.php">ETHNIC<span> INDIAN FASHION</span><small><center>Be a Traditional</center></small></a></h1>   
      </div>
      <div class="menu_nav">
        <ul>
           <li class="active"><a href="admin_index.php">Home</a></li>
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
      <div class="mainbar">
        <div class="article">
          <p>&nbsp;</p>
          <h1>Administrator : <?php echo $_SESSION['UserName'];?></h1>
        </div>
        <div class="article">
          
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 align="center" class="star">Category</h2>
          <div>
            <div id="right-col">
              <ul class="side">
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
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
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