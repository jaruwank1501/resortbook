<?php 
    session_start();

    if (!isset($_SESSION['username']))
    {
        $_SESSION['msg'] = "You must log in first";
        header('location: login1.php');
    }

    if  (isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login1.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page for Member</title>

    <link rel="stylesheet" href="style1.css">
</head>
<body>
     <div class="header">
        <h2>Home page for Member </h2>
     </div>
     <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- login user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index1.php?logout='1'" style="color: red;">Logout</a></p>
            <p>You want go to homepage? <a href="welcomemember.html">Homepage</a></p>
        <?php endif ?>
     </div>

 <footer>
<p>Copyright &copy; 2021 | Sirinutthida Resort</p>
    </footer>
 <BODY>
</HTML>

