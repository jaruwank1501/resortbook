<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> Save </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
<style type="text/css">
html { 
background-image: url('book.jpg');
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
</style> 
<a href="bookfinnishadmin.html">Finnish</a>    
<br>
<br>
  <?php
$objConnect = mysql_connect("localhost", "root", "123456789") or die("Error Connect to Database");
$objDB = mysql_select_db("resort");
$strSQL = "INSERT INTO books ";
$strSQL .="(bookdate,roomid,bookcus,booktel,HowManyPeople,HowLong,CheckIn,CheckOut)";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["NumberRoom"]."','".$_POST["Firstname"]."','".$_POST["Lastname"]."','".$_POST["Telephone"]."' 
,'".$_POST["HowManyPeople"]."','".$_POST["HowLong"]."' ,'".$_POST["CheckIn"]."','".$_POST["CheckOut"]."')";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
echo  "Save Done.";
}
else
{
echo "Error Save[".$strSQL."]";
}
mysql_close($objConnect);

?>


 </BODY>
</HTML>
