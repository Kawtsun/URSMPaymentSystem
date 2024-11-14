<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URSM Payment System - Register Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <div class="container">
        <div class="intro">
            <h1>Register Admin Account</h1>
        </div>

        <?php
        include '../validate/alert.php';
        ?>

        <form action="../validate/register-validate.php" method="POST">
            <div class="form_data">
                <input type="text" name="fullname" placeholder="Full Name">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
                <input type="submit" value="Register Account" name="submit">
            </div>
        </form>
    </div>
</body>
</html>