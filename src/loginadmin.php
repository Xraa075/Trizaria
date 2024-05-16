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
    $error = true;
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

<body>
    <div class="container">
        <img src="asset/logotrizaria.svg" class="img">
        <h1>LOGIN</h1>

        <?php if (isset($error)) : ?>
        <p>username / password salah!!</p>
        <?php endif; ?>

        <form action="" method="post">
            <ul>
                <li>
                    <input type="text" name="username" placeholder="username">
                </li>
                <li>
                    <input type="password" name="password" placeholder="password">
                </li>
                <button type="submit" name="login" class="submit">Login</button>
            </ul>
        </form>
    </div>
</body>

</html>