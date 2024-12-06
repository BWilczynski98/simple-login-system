<?php
require_once "functions.php";

session_start();

if (isset($_SESSION['email']) && $_SESSION['password']) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    echo "Email: {$email} | Password: {$password}";
} else {
    header('location: /');
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="logout.php" method="post">
    <button type="submit">Wyloguj</button>
</form>
</body>
</html>
