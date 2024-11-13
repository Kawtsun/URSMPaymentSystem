<?php
session_start();

include 'db.php';

if (isset($_POST['submit'])) {
    
    $fullname = $_POST['fullname'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $password_hash = password_hash($pass, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($fullname) || empty($user) || empty($pass) || empty($confirm_password)) {
        array_push($errors, "All fields are required");
    }

    if (strlen($pass) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }

    if ($pass !== $confirm_password) {
        array_push($errors, "Password does not match");
    }
    
    $sql = "SELECT * FROM users WHERE username = '$user'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0 ) {
        array_push($errors, "Username already exists!");
    }

    if (count($errors) > 0) {
       $_SESSION['message'] = $errors;
       header("Location: ../screens/register.php");
       exit();
    } else {
        $sql = "INSERT INTO users (fullname, username, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $fullname, $user, $password_hash);
        mysqli_stmt_execute($stmt);

        $_SESSION['success_message'] = "You are registered successfully";
        header("Location: ../screens/register.php");
        exit();
    }
}

?>