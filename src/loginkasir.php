<?php

require 'connection.php';

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM kasir WHERE username_kasir = '$username'");

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password_kasir"])) {
            header("Location: dashboard_kasir.php");
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginkasir.css">
    <title>Login</title>
</head>
`

<body>


    <div class="container">
        <img src="asset/logotrizaria.svg">
        <h1>Logout</h1>
        <form action="" method="post">
            <ul>
                <li class="label">
                    <input type="text" name="username" id="username">
                </li>
                <li class="label">
                    <input type="password" name="password" id="password">
                </li>
                <button type="submit" name="login" class="button">Login</button>
            </ul>
        </form>
    </div>
</body>

</html>