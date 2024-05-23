<?php

session_start();

require 'connection.php';

if(!isset($_SESSION["login"])) {
    header("Location: loginadmin.php");
    exit;
}

$nama = $_GET['nama'];

$select = "SELECT * FROM makanan WHERE nama = '$nama'";
$sql_select = mysqli_query($conn, $select);

$detail = mysqli_fetch_assoc($sql_select);
$image = $detail["gambar"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail_makanan.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="container1">
            <div class="imagecon">
                <?php print($image); ?>
            </div>
            <div class="detailcon">
                <h2><?= $detail["nama"] ?></h2>
                <p><?= $detail["detail"] ?></p>
                <h2><?= $detail["harga"] ?></h2>
                <h2><?= $detail["stok"] ?></h2>
            </div>
        </div>
        <div class="buttonkembali">
            <a href="dashboard_admin.php">
                <h2>Kembali</h2>
            </a>
        </div>
    </div>
</body>


</html>