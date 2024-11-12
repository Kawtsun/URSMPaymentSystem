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
            include "../validate/db.php";

            if (isset($_POST['submit'])) {
                $fullname = $_POST['fullname'];
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];
                
                $password_hash = password_hash($pass, PASSWORD_DEFAULT);
                $errors = array();

                if (empty($fullname) OR empty($user) OR empty($pass) OR empty($confirm_password)) {
                    array_push($errors, "All fields are required");
                }

                if (strlen($pass) < 8) {
                    array_push($errors,"Password must be at least 8 characters long");
                }

                if ($pass !== $confirm_password) {
                    array_push($errors,"Password does not match");
                }

                $sql = "SELECT * FROM users WHERE username ='$user'";
                $result = mysqli_query($conn, $sql);
                $rowcount = mysqli_num_rows($result);
                if ($rowcount > 0) {
                    array_push($errors, "Username already exists!");
                }

                if (count($errors) > 0)  {
                    foreach ($errors as $error) {
                        echo "<div class='error_alert'>$error</div>";
                    }
                } else {
                    $sql = "INSERT INTO users (fullname, username, password) VALUES (?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepare_stmt = mysqli_stmt_prepare($stmt, $sql);
                    if ($prepare_stmt) {
                        mysqli_stmt_bind_param($stmt,"sss",$fullname, $user, $password_hash);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='success_alert'>You are registered successfully.</div>";
                    } else {
                        die("Something went wrong");
                    }
                }
            }
        ?>
        <form action="" method="POST">
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