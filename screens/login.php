<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URSM Payment System - Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <div class="container">
        <form action="../validate/login-validate.php" method="POST">
            <div class="intro">
                <h1>Login Now</h1>
            </div>

            <?php
            include '../validate/alert-login.php';
            ?>
            <div class="form_data">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Login" name="login">
            </div>
        </form>
        <div class="message">
            <p>
                Not registered yet? <a href="register.php">Register Here</a>
            </p>
        </div>
    </div>
</body>
</html>