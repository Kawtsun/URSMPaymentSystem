<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: screens/login.php");
}

echo "Welcome, " . $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body>
    <a href="../validate/logout-validate.php">Logout</a>
</body>
</html>