<?php
session_start();

include 'db.php';

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $users = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($users) {
        if (password_verify($pass, $users["password"])) {
            $_SESSION['user'] = $user;
            header("Location: ../screens/student-dashboard.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Password does not match.";
            header("Location: ../screens/login.php");
            exit();
        }
    } else {
        $_SESSION['error_message'] = "User does not match.";
        header("Location: ../screens/login.php");
        exit();
    }
}




?>