<?php

require 'koneksi.php';
session_start();

if (empty($_SESSION['nama_pembeli'])) {
    header("Location: inputnama_kasir.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order_kasir.css">
    <title>Your Order</title>
</head>

<body>
    <h1 class="title"><?php echo $_SESSION['nama_pembeli'] ?> order</h1>
    <form>
        <?php
        foreach ($_SESSION['menu'] as $key => $value) {
            $menus = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = '$key' UNION SELECT * FROM minuman WHERE nama = '$key'");
            $menu = mysqli_fetch_assoc($menus);
            echo
            '<div class="container1">
                <div class="leftcon">
                    <div class="left">
                    <h2 class="titleproduct">' . implode(' ', explode('_', $menu['nama'])) . '</h2>
                    <P>' . $menu['detail'] . '</P>
                    <h2 class="price">' . $menu['harga'] . '</h2>
                    </div>
                    <div class="right">' . $menu['gambar'] . '</div>
                </div>
                <div class="rightcon">
                    <h1>' . $value . ' PCS</h1>
                    <h2>' . $value * $menu['harga'] . '</h2>
                </div>
            </div>';
        }
        ?>
        <div class="container2">
            <h2>TOTAL PEMBAYARAN</h2>
        </div>
        <div class="container3">
            <h2>SUBMIT</h2>
        </div>
    </form>
</body>

</html>