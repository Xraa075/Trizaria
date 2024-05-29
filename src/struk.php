<?php
session_start();
require 'koneksi.php';

$tanggal = date("l d F Y H:i:s") . " WIB";
$tanggal1 = date("ymd");
$nomor_unik = 1;
$nomor_unik_formatted = sprintf("%04d", $nomor_unik);
$nomor_bill = "PSN" . $tanggal1 . $nomor_unik_formatted;

if (empty($_SESSION['nama_pembeli'])) {
    header("Location: inputnama_kasir.php");
    exit;
}

if (isset($_POST['logout'])) {

    //update data transaksi ke database sebelum session dihapus
    $id_kasir = $_SESSION['id_kasir'];
    $nomor_transaksi = $nomor_bill;
    $tanggal_transaksi = $tanggal;
    $nama_pembeli = $_SESSION['nama_pembeli'];
    $query = "INSERT INTO transaksi (id_kasir, no_transaksi, nama_pelanggan) VALUES ('$id_kasir', '$nomor_transaksi', '$nama_pembeli')";
    $result = mysqli_query($koneksi, $query);

    //menghapus session setelah data transaksi disimpan
    unset($_SESSION['nama_pembeli']);
    unset($_SESSION['menu']);
    unset($_SESSION['total']);
    unset($_SESSION['uangditerima']);
    unset($_SESSION['kembalian']);

    header("Location: dashboard_kasir.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="struk.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="logo">
                <img src="asset/logoo.svg">
            </div>
            <div class="header">
                <h2>The Best Authentic Pizza</h2>
            </div>
            <div class="alamat">
                <p>Gedung AKA, Jl. Bangka Raya No.27C RT 004/007 Kelurahan Pela Mampang, Kecamatan Mampang Prapatan,</p>
                <p>Kota Administrasi Jakarta Selatan, DKI Jakarta.</p>
            </div>
            <div class="dashed-line"></div>
        </div>
        <div class="table">
            <div class="row">
                <div class="cell label">No. Bill</div>
                <div class="cell separator">:</div>
                <div class="cell"><?php echo $nomor_bill; ?></div>
            </div>
            <div class="row">
                <div class="cell label">Date</div>
                <div class="cell separator">:</div>
                <div class="cell"><?php echo $tanggal; ?></div>
            </div>
            <div class="row">
                <div class="cell label">Cashier</div>
                <div class="cell separator">:</div>
                <div class="cell"><?php echo $_SESSION['nama_kasir']; ?></div>
            </div>
            <div class="row">
                <div class="cell label">Customer</div>
                <div class="cell separator">:</div>
                <div class="cell"><?php echo $_SESSION['nama_pembeli'] ?></div>
            </div>
        </div>
        <div class="dashed-line"></div>
        <?php foreach ($_SESSION['menu'] as $key => $value) : ?>
            <div class="menu">
                <div class="order">
                    <div class="pesanan"><?php echo $key ?></div>
                    <div class="jumlah"><?php echo $value ?></div>
                    <?php
                    $menus = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = '$key' UNION SELECT * FROM minuman WHERE nama = '$key'");
                    $menu = mysqli_fetch_assoc($menus);
                    ?>
                    <div class="satuan"><?php echo $menu['harga'] ?></div>
                    <div class="harga"><?php echo $value * $menu['harga'] ?></div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="dashed-line"></div>
        <div class="total">
            <div class="all">
                <div class="col price">Total Harga</div>
                <div class="col"><?php echo $_SESSION['total'] ?></div>
            </div>
            <div class="row">
                <div class="col price">Bayar</div>
                <div class="col"><?php echo $_SESSION['uangditerima'] ?></div>
            </div>
            <div class="row">
                <div class="col price">Kembali</div>
                <div class="col"><?php echo $_SESSION['kembalian'] ?></div>
            </div>
        </div>
        <form method="POST">
            <button class="submit-button" name="logout">Submit</button>
        </form>
    </div>
</body>

</html>