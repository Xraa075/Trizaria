<?php

session_start();

require 'function.php';

if(!isset($_SESSION["login"])) {
    header("Location: loginadmin.php");
    exit;
}

$nama = $_GET['nama'];

$select = "SELECT * FROM makanan WHERE nama = '$nama'";
$sql_select = mysqli_query($conn, $select);

$detail = mysqli_fetch_assoc($sql_select);

if(isset($_POST["submit"])) {
    if(isset($_POST["checkbox"])) {

    } else {
        $error = 'checklist terlebih dahulu jika anda ingin menghapus menu <?= $detail["nama"] ?>';
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hapus_makanan.css">
    <title>Hapus Menu Makanan</title>
</head>

<body>
    <div class="container">
        <img class="logo" src="asset/logotrizaria.svg">
        <div class="container1">
            <div class="imagecon">
                <img class="gambarmakanan" src="../asset_database/makanan/<?= $detail["gambar"]; ?>">
            </div>
            <div class="detailcon">
                <h2><?= $detail["nama"] ?></h2>
                <p><?= $detail["detail"] ?></p>
                <h2><?= $detail["harga"] ?></h2>
                <h2><?= $detail["stok"] ?></h2>
            </div>
        </div>
        <form>
            <input name="id" type="hidden" value="<?= $detail["id_makanan"] ?>">
            <input name="checkbox" type="checkbox">
            <p>Apakah anda yakin menghapus menu <?= $detail["nama"] ?> ?</p>
            <div class="buttonkembali">
                <button name="submit" type="submit">
                    <h2>Hapus</h2>
                </button>
            </div>
        </form>
    </div>
</body>

</html>