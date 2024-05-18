<?php

session_start();

require 'connection.php';

if(!isset($_SESSION["login"])) {
    header("Location: loginadmin.php");
    exit;
}

$username_kasir = $_SESSION["user"];

$sql_nama = "SELECT * FROM admin_pizza WHERE username_admin = '$username_kasir'";
$result_nama = $conn->query($sql_nama);

if($result_nama->num_rows > 0) {
    $nama = [];
    while($row = $result_nama->fetch_assoc()) {
        $nama = htmlspecialchars($row["nama_admin"]);
    }
}

$result_makanan = mysqli_query($conn, "SELECT * FROM makanan");

$result_minuman = mysqli_query($conn, "SELECT * FROM minuman");

// while($makanan = mysqli_fetch_assoc($result_makanan)) {
//     var_dump($makanan);
// }




// $sql_makanan = "SELECT gambar FROM makanan";
// $result = $conn->query($sql_makanan);

// if($result->num_rows > 0) {
//     $gambar = [];
//     while($row = $result->fetch_assoc()) {
//         $gambar = htmlspecialchars($row["gambar"]);
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard_admin.css">
    <title>Dashboard Admin</title>
</head>

<body>
    <div class="container">
        <img src="asset/logotrizaria.svg">
        <h1>Selamat datang, <?= $nama ?></h1>
        <div class="container1">
            <h2>Menejemen Makanan</h2>
            <table>
                <div class="table_head">
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </div>
                <div class="table_body">

                    <?php $i = 1; ?>
                    <?php while($row = mysqli_fetch_assoc($result_makanan)) : ?>
                    <?php $image = $row["gambar"]; ?>

                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <?php print($image); ?>
                        </td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["harga"]; ?></td>
                        <td><?= $row["stok"]; ?></td>
                        <td>
                            <a href="">Detail</a>
                            <a href="">Edit</a>
                            <a href="">Hapus</a>
                        </td>
                    </tr>

                    <?php $i++; ?>
                    <?php endwhile; ?>

                </div>
            </table>
        </div>
        <div class="container2">
            <h2>Menejemen Minuman</h2>
            <table>
                <div class="table_head">
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </div>
                <div class="table_body">

                    <?php $i = 1; ?>
                    <?php while($row = mysqli_fetch_assoc($result_minuman)) : ?>
                    <?php $image = $row["gambar"]; ?>

                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <?php print($image); ?>
                        </td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["harga"]; ?></td>
                        <td><?= $row["stok"]; ?></td>
                        <td>
                            <a href="">Detail</a>
                            <a href="">Edit</a>
                            <a href="">Hapus</a>
                        </td>
                    </tr>

                    <?php $i++; ?>
                    <?php endwhile; ?>

                </div>
            </table>
        </div>
    </div>
</body>

</html>