<?php include('server1.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register For Member</title>

    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="header">
    <h2>Register For Member</h2>
    </div>
    
    <form action="logindb1.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error'])
                    ?>
                </h3>
            </div>
        <?php endif ?>


        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p>Not yet a member? <a href="register1.php">Sign up</a></p>
    </form>
    <footer>
    <p>Copyright &copy; 2021 | Sirinutthida Resort</p>
    </footer>
</body>
</html>