<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sirinutthida Resort</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style14.css">
    <form action="bookadmin.php" name="frmAdd" method="post">
</head>
<body>

    <div class="menubar">
        <div class="container">
            <div class="logo">
                <h1>Sirinutthida Resort</h1>
            </div>
            <ul class="menu">
            <li>
                    <a href="welcomemember.html">Homepage</a>
                </li>
                <li>
                    <a href="promotion.html">Promotion</a>
                </li>
                <li>
                    <a href="Reviewuser.html">Review</a>
                </li>
                <li>
                    <a href="listforuser.php">List a room</a>
                </li>
                <li>
                    <a href="bookuser.php">Book a room</a>
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
                <h1>List A Room</h1>
                <p>รายการจองห้องพัก</p>
            </div>
        </div>
    </header>
<center>
<form action="Booksaveadmin.php" name="frmAdd" method="post">

<body>
<?php
session_start();
include('server1.php');
$errors = array();

$user_check_query = "SELECT * FROM books ";
$query = mysqli_query($conn, $user_check_query);
$result = mysqli_fetch_assoc($query);

?>
<center>

<br>
<table border=5 width=1000 bgcolor="#CCFF99"><font size=5 color="#330000">
<center>
<tr>
<th width="91"> <div align="center">Bookdate</div></th>
<th width="198"> <div align="center">RoomID </div></th>
<th width="198"> <div align="center">Name </div></th>
<th width="198"> <div align="center">CheckIn </div></th>
<th width="198"> <div align="center">CheckOut </div></th>
<th width="198"> <div align="center">Telephone </div></th>
</tr>
<center>
<?php
while($Result = mysqli_fetch_assoc($query))
{
?>
<center>
<tr>
<td><div align="center"><?php echo $Result["Bookdate"];?></div></td>
<td><div align="center"><?php echo $Result["RoomID"];?></td>
<td><div align="center"><?php echo $Result["Name"];?></td>
<td><div align="center"><?php echo $Result["CheckIn"];?></td>
<td><div align="center"><?php echo $Result["CheckOut"];?></td>
<td><div align="center"><?php echo $Result["Telephone"];?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>
<footer>
        <p>Copyright &copy; 2021 | Sirinutthida Resort</p>
</footer>
    </BODY>
</HTML>