<?php
include "koneksi.php" ;
// Lakukan pengecekan jika metode HTTP adalah POST dan ada parameter 'submit' yang dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Lakukan pengecekan jika parameter 'hal' adalah 'edit'
    if ($_GET['hal'] == "edit") {
        // Lakukan query UPDATE untuk mengubah data yang ada
        $edit = mysqli_query($koneksi, "UPDATE makanan SET
            gambar = '$_POST[gambar]',
            nama = '$_POST[nama]',
            detail = '$_POST[detail]',
            harga = '$_POST[harga]',
            stok = '$_POST[stok]'
            WHERE id = '$_GET[id_makanan]'
        ");

        // Uji keberhasilan query UPDATE
        if ($edit) {
            echo "<script>
            alert('Edit data sukses');
            </script>";
        } else {
            echo "<script>
            alert('Edit data gagal');
            </script>";
        }
    }
}

// Inisialisasi variabel untuk menampung data yang akan diedit
$gambar = "";
$nama = "";
$detail = "";
$harga = "";
$stok = "";

// Lakukan pengecekan jika parameter 'hal' adalah 'edit'
if ($_GET['hal'] == "edit") {
    // Lakukan query SELECT untuk mendapatkan data yang akan diedit
    $tampil = mysqli_query($koneksi, "SELECT * FROM makanan WHERE id_makanan = '$_GET[id_makanan]' ");
    $data = mysqli_fetch_array($tampil);
    if ($data) {
        // Ambil data yang akan diedit dan simpan ke dalam variabel
        $gambar = $data['gambar'];
        $nama = $data['nama'];
        $detail = $data['detail'];
        $harga = $data['harga'];
        $stok = $data['stok'];
    }
}

header('location:add.php');
?>
