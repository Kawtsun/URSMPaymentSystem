<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: screens/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URSM Payment System</title>
</head>
<body>
    <h1>Hello World!</h1>
    <a href="validate/logout.php">Logout</a>
</body>
</html>