<?php

require 'koneksi.php';
session_start();



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
    <h1 class="title">Your Order</h1>
    <form>
        <?php
        if (!empty($_SESSION['margaritha'])) {
            echo
            '<div class="container1">
                <div class="leftcon">
                    <div class="left">
                    <h2 class="titleproduct">' . $Margaritha['nama'] . '</h2>
                    <P>' . $Margaritha['detail'] . '</P>
                    <h2 class="price">' . $Margaritha['harga'] . '</h2>
                    </div>
                    <div class="right">' . $Margaritha['gambar'] . '</div>
                </div>
                <div class="rightcon">
                    <h1>' . $_SESSION['margaritha'] . ' PCS</h1>
                    <h2>' . $_SESSION['margaritha'] * $Margaritha['harga'] . '</h2>
                </div>
            </div>';
        }
        if (!empty($_SESSION['pepperoni'])) {
            echo
            '<div class="container1">
                <div class="leftcon">
                    <div class="left">
                    <h2 class="titleproduct">' . $Pepperoni['nama'] . '</h2>
                    <P>' . $Pepperoni['detail'] . '</P>
                    <h2 class="price">' . $Pepperoni['harga'] . '</h2>
                    </div>
                    <div class="right">' . $Pepperoni['gambar'] . '</div>
                </div>
                <div class="rightcon">
                    <h1>' . $_SESSION['pepperoni'] . ' PCS</h1>
                    <h2>' . $_SESSION['pepperoni'] * $Pepperoni['harga'] . '</h2>
                </div>
            </div>';
        }
        if (!empty($_SESSION['sausage'])) {
            echo
            '<div class="container1">
                <div class="leftcon">
                    <div class="left">
                    </div>
                    <div class="right">
                    </div>
                </div>
                <div class="rightcon">
                    <h1>' . $_SESSION['sausage'] . ' PCS</h1>
                </div>
            </div>';
        }
        ?>

        <div class="container2">
            <h2>TOTAL PEMBAYARAN : 375K</h2>
        </div>
        <div class="container3">
            <h2>SUBMIT</h2>
        </div>
    </form>
</body>

</html>