<html>
<head>
<title>List Edit</title>
</head>
<body>
<a href="welcomes.html">Homepage</a> &nbsp;&nbsp;<a href="list.php">List Customer</a>  &nbsp;&nbsp;<a href="DeleteRecord.php">Delete Customer</a>
<style type="text/css">
html { 
background-image: url('listedit.jpg');
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
</style> 
<?php
$objConnect = mysql_connect("localhost","root","123456789") or die("Error Connect to Database");
$objDB = mysql_select_db("resort");
$strSQL = "SELECT * FROM book";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<table width="600" border="1">
<table border=5 width=1000 bgcolor="#CCFF99"><font size=5 color="#330000">
<center>
<tr>
<th width="91"> <div align="center">NumberRoom </div></th>
<th width="98"> <div align="center">Firstname </div></th>
<th width="98"> <div align="center">Lastname </div></th>
<th width="198"> <div align="center">HowLong </div></th>
<th width="97"> <div align="center">CheckIn </div></th>
<th width="97"> <div align="center">CheckOut </div></th>
<th width="30"> <div align="center">Edit </div></th>
</tr>
<center>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
<tr>
<td><div align="center"><?php echo $objResult["NumberRoom"];?></div></td>
<td><div align="center"><?php echo $objResult["Firstname"];?></div></td>
<td><div align="center"><?php echo $objResult["Lastname"];?></td>
<td><div align="center"><?php echo $objResult["HowLong"];?></td>
<td><div align="center"><?php echo $objResult["CheckIn"];?></td>
<td><div align="center"><?php echo $objResult["CheckOut"];?></td>
<td align="center"><a href="edit.php?Firstname=<?php echo $objResult["Firstname"];?>">Edit</a></td>
</tr>
<?php
}
?>
</table>
<?php
mysql_close($objConnect);
?>
</body>
</html>