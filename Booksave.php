<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sirinutthida Resort</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style9.css">

</head>
<body>

    <div class="menubar">
        <div class="container">
            <div class="logo">
                <h1>Sirinutthida Resort</h1>
            </div>
            <ul class="menu">
                <li>
                    <a href="welcomeadmin.html">Homepage</a>
                </li>
                <li>
                    <a href="listforadmin.php">List a room</a>
                </li>
                <li>
                    <a href="books.php">Booking room</a>
                </li>
                <li>
                    <a href="welcome.html">Log Out</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="clearfix"></div>

    <header class="header">
        <div class="container">
            <div class="header_area">
                <h1>Welcome to Sirinutthida Resort</h1>
                <p>บรรยากาศดี บริการเยี่ยม ราคาไม่แพง</p>
            </div>
        </div>
    </header>
</style> 
<a href="bookfinnishuser.html">Finnish</a>    
<br>
<br>
  <?php
$objConnect = mysql_connect("localhost", "root", "") or die("Error Connect to Database");
$objDB = mysql_select_db("resortbook");
$strSQL = "INSERT INTO books ";
$strSQL .="(bookdate,roomid,bookcus,booktel,checkin,checkout,bookmsg)";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["bookdate"]."','".$_POST["roomid"]."','".$_POST["bookcus"]."','".$_POST["booktel"]."' 
,'".$_POST["checkin"]."' ,'".$_POST["checkout"]."','".$_POST["bookmsg"]."')";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
echo "Save Done.";
}
else
{
echo "Error Save[".$strSQL."]";
}
mysql_close($objConnect);

?>


 </BODY>
</HTML>
