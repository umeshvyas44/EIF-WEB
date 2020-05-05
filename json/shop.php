<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "database not found";
}
else
{
mysql_select_db("shopping",$con);
}


?>