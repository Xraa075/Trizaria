<?php
$koneksi = mysqli_connect("localhost", "root", "", "pizza");
if (mysqli_connect_errno()) {
	echo "Koneksi Gagal " . mysqli_connect_error();
}

$Margaritha_row = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = 'Margaritha'");
$Margaritha = mysqli_fetch_assoc($Margaritha_row);

$Pepperoni_row = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = 'Pepperoni'");
$Pepperoni = mysqli_fetch_assoc($Pepperoni_row);

$Sausage_row = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = 'Sausage'");
$Sausage = mysqli_fetch_assoc($Sausage_row);

$Beef_cheese_row = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = 'Beef Cheese'");
$Beef_cheese = mysqli_fetch_assoc($Beef_cheese_row);

$Double_cheese_row = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = 'Double Cheese'");
$Double_cheese = mysqli_fetch_assoc($Double_cheese_row);

$Mushroom_row = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = 'Mushroom'");
$Mushroom = mysqli_fetch_assoc($Mushroom_row);

$Zaitun_row = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = 'Zaitun'");
$Zaitun = mysqli_fetch_assoc($Zaitun_row);

$Sisilia_row = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = 'Sisilia'");
$Sisilia = mysqli_fetch_assoc($Sisilia_row);

$Chicken_tandori_row = mysqli_query($koneksi, "SELECT * FROM makanan WHERE nama = 'Chicken Tandori'");
$Chicken_tandori = mysqli_fetch_assoc($Chicken_tandori_row);

$Ice_cola_row = mysqli_query($koneksi, "SELECT * FROM minuman WHERE nama = 'Ice Cola'");
$Ice_cola = mysqli_fetch_assoc($Ice_cola_row);