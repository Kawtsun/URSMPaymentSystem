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
        <form action="" method="POST">
            <div class="intro">
                <h1>Login Now</h1>
            </div>

            <?php
            include '../validate/db.php';

            if (isset($_POST['login'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                
                $sql = "SELECT * FROM users WHERE username = '$user'";
                $result = mysqli_query($conn, $sql);
                $users = mysqli_fetch_array($result, MYSQLI_ASSOC);

                if ($users) {
                    if (password_verify($pass, $users["password"])) {
                        session_start();
                        $_SESSION['user'] = "success";
                        header("Location: ../index.php");
                        die();
                    } else {
                        echo "<div class='alert error'> Password does not match </div>";
                    }
                } else {
                    echo "<div class='alert error'> User does not match </div>";
                }
            }

            ?>
            <div class="form_data">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Login" name="login">
            </div>
        </form>
    </div>
</body>
</html>