<?php
include "koneksi.php" ;

$gambar = $_FILES['gambar']['name'];
	$file_tmp = $_FILES['gambar']['tmp_name'] ;
	$nama = $_POST['nama'];
    $detail = $_POST['detail'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    move_uploaded_file($file_tmp, 'file/'.$gambar) ;
    $query = "INSERT INTO minuman SET 
								    gambar = '$gambar',
								    nama = '$nama',
                                    detail = '$detail',
                                    harga = '$harga',
                                    stok = '$stok'
	";
    mysqli_query($koneksi, $query) 
	or die("SQL Error " .mysqli_error());
    header('location:manajemen.php');
?>