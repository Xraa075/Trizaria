<?php
session_start();

if (empty($_SESSION['total'])) {
    header("Location: menu.php");
    exit;
}

if (isset($_POST['submit'])) {
    $uang_diterima = $_POST['uang_diterima'];
    $_SESSION['uangditerima'] = $uang_diterima;
    $total = $_SESSION['total'];
    $kembalian = $uang_diterima - $total;
    $_SESSION['kembalian'] = $kembalian;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pembayaran_kasir.css">
    <title>Pembayaran</title>
</head>

<body>
    <h1 class="title">Pembayaran</h1>
    <div class="container">
        <form class="container1" action="" method="POST">
            <h2 class="text">Total Pembayaran : <?php echo $_SESSION['total'] ?></h2>
            <input type="number" name="uang_diterima" placeholder="<?php echo isset($_SESSION['uangditerima']) ? $_SESSION['uangditerima'] : 0; ?>" required>
            <button type="submit" name="submit">Submit</button>
        </form>
        <div class="container2">
            <h2 class="text">Uang Kembali : <?php echo isset($_SESSION['kembalian']) ? $_SESSION['kembalian'] : 0; ?></h2>
            <button type="button" name="cetak" onclick="window.location = 'struk.php'">
                Cetak Struk Transaksi
            </button>
        </div>
    </div>
</body>

</html>