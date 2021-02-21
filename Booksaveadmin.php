<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sirinutthida Resort</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style12.css">

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
                    <a href="listforadmin.php">List a room</a>
                </li>
                <li>
                    <a href="bookadmin.php">Book a room</a>
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
<br>
<br>
<center>
<a href="bookfinnishadmin.html">Finnish</a>    
<br>
<br>
<?php
    session_start();
    include('server1.php');
    $errors = array();

    if (isset($_POST['books']))
    {
        $bookcus = mysqli_real_escape_string($conn, $_POST['bookcus']);
        $booktel = mysqli_real_escape_string($conn, $_POST['booktel']);
        $roomid = mysqli_real_escape_string($conn, $_POST['roomid']);
        $bookdate = mysqli_real_escape_string($conn, $_POST['bookdate']);
        $checkin = mysqli_real_escape_string($conn, $_POST['checkin']);
        $checkout = mysqli_real_escape_string($conn, $_POST['checkout']);
        $bookmsg = mysqli_real_escape_string($conn, $_POST['bookmsg']);

        if (empty($bookcus))
        {
            array_push($errors, "Username is required");
        }
        if (empty($booktel))
        {
            array_push($errors, "Telephone is required");
        }
        if (empty($roomid))
        {
            array_push($errors, "Room is required");
        }

        
        $user_check_query = "SELECT * FROM books WHERE bookcus = '$bookcus' OR booktel = '$booktel' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) 
        {
            if ($result['bookcus'] === $bookcus)
            {
                array_push($errors, "Username already exits");
            }
            if ($result['booktel'] === $booktel)
            {
                array_push($errors, "Telephone already exits");
            }
        }

        if (count($errors) == 0)
        {
            $booktel = md5($booktel);

            $sql = "INSERT INTO books (bookcus, booktel, roomid, bookdate, checkin, checkout, bookmsg) VALUES ('$bookcus', '$booktel', '$roomid', '$bookdate', '$checkin', '$checkout', '$bookmsg')";
            mysqli_query($conn, $sql);

            $_SESSION['bookcus'] = $bookcus;
            $_SESSION['success'] = "You are now booking a room";
            header('location: bookfinnishadmin.html');
        }
        else
        {
            array_push($errors, "Username  already exits");
            $_SESSION['error'] = "Username already exits";
            header('location: bookadmin.php');
        }
    }
?>
 <footer>
        <p>Copyright &copy; 2021 | Sirinutthida Resort</p>
    </footer>