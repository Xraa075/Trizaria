<?php

session_start();

require 'connection.php';

if(!isset($_SESSION["login"])) {
    header("Location: loginadmin.php");
    exit;
}

if(isset($_POST["submit"])) {
    // Ambil informasi file yang diunggah
    $fileName = $_FILES["gambar"]["name"];
    $fileTmpName = $_FILES["gambar"]["tmp_name"];
    $fileError = $_FILES["gambar"]["error"];
    $fileType = $_FILES["gambar"]["type"];
    $fileSize = $_FILES["gambar"]["size"];

    $fileData = file_get_contents($fileTmpName);
}

if(isset($_POST["submit"])) {
    // $gambar = $_POST["gambar"];
    $nama = $_POST["nama"];
    $detail = $_POST["detail"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    $query = "INSERT INTO makanan VALUES ('', '$fileData', '$nama', '$detail', '$harga', '$stok')";

    mysqli_query($conn, $query);

    header("Location: dashboard_admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah_makanan.css">
    <title>Tambah Menu Makanan</title>
</head>

<body>
    <div class="container">
        <div class="containerimage">
            <img src="asset/logotrizaria.svg">
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="container1">
                <h2>Tambah Makanan</h2>
                <div class="inputgambar">
                    <label for="gambar">Pilih Gambar</label>
                    <input class="inputgambarchoose" name="gambar" type="file">
                </div>
                <input class="inputother" name="nama" type="text" placeholder="nama">
                <input class="inputother" name="detail" type="text" placeholder="detail">
                <input class="inputother" name="harga" type="number" placeholder="harga">
                <input class="inputother" name="stok" type="number" placeholder="stok">
                <button name="submit" type="submit">
                    <h2>Submit</h2>
                </button>
            </div>
        </form>
    </div>
</body>

</html>