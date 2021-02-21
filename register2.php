<?php 
    session_start();
    include('server2.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register For Admin</title>

    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="header">
    <h2>Register For Admin</h2>
    </div>
    
    <form action="registerdb2.php" method="post">
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
        <?php include('errors2.php'); ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1">
        </div>

        <div class="input-group">
            <label for="password">Confirm Password</label>
            <input type="password" name="password_2">
        </div>

        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <p>Already a member? <a href="login2.php">Sign in</a></p>
    </form>
    <footer>
    <p>Copyright &copy; 2021 | Sirinutthida Resort</p>
    </footer>
</body>
</html>