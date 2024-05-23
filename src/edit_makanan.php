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

if(isset($_POST["submit"])) {
    $fileName = $_FILES["gambar"]["name"];
    $fileTmpName = $_FILES["gambar"]["tmp_name"];
    $fileError = $_FILES["gambar"]["error"];
    $fileType = $_FILES["gambar"]["type"];
    $fileSize = $_FILES["gambar"]["size"];

    $fileData = file_get_contents($fileTmpName);
}

if(isset($_POST["submit"])) {
    $id_makanan = $_POST["id"];
    $nama = $_POST["nama"];
    $detail = $_POST["detail"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    $query = "UPDATE makanan SET gambar = '$fileData', nama = '$nama', detail = '$detail', harga = '$harga', stok = '$stok' WHERE id = '$id_makanan'";

    mysqli_query($conn, $query);

    header("Location: dashboard_admin.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit_makanan.css">
    <title>Edit</title>
</head>

<body>
    <div class="container">
        <img src="asset/logotrizaria.svg">
        <div class="container1">
            <div class="imagecon">
                <?php print($image); ?>
            </div>
            <div class="detailcon">
                <h2><?= $detail["nama"]; ?></h2>
                <p><?= $detail["detail"]; ?></p>
                <h2><?= $detail["harga"]; ?></h2>
                <h2><?= $detail["stok"]; ?></h2>
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="container2">
                <input name="id" type="hidden" value="<?= $detail["id_makanan"]; ?>">
                <div class="inputgambar">
                    <img src="../asset_database/makanan/<?= $row["gambar"]; ?>">
                    <input class="inputgambarchoose" name="gambar" type="file">
                </div>
                <input class="inputother" name="nama" type="text" placeholder="nama" value="<?= $detail["nama"]; ?>">
                <input class="inputother" name="detail" type="text" placeholder="detail"
                    value="<?= $detail["detail"]; ?>">
                <input class="inputother" name="harga" type="number" placeholder="harga"
                    value="<?= $detail["harga"]; ?>">
                <input class="inputother" name="stok" type="number" placeholder="stok" value="<?= $detail["stok"]; ?>">
                <button name="submit" type="submit">
                    <h2 class="textbutton">Submit</h2>
                </button>
            </div>
        </form>
    </div>
</body>

</html>