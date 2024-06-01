<?php

//koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizza";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//fungsi untuk menampilkan nama admin
function tampilNamaAdmin($data) {

    //memanggil variabel globan $conn0
    global $conn;

    //mengambil data dari session dan menyimpannya dalam variabel
    $username_kasir = $data;

    $queryNama = "SELECT * FROM admin_pizza WHERE username_admin = '$username_kasir'";
    $resultNama = $conn->query($queryNama);

    if($resultNama->num_rows > 0) {
        $namaAdmin = [];
        while($row = $resultNama->fetch_assoc()) {
        $namaAdmin = htmlspecialchars($row["nama_admin"]);
        return $namaAdmin;
        }
    }
}

//fungsi untuk menambahkan makanan (tambah_makanan.php)
function tambahMakanan($data) {
    
    //memanggil variabel global $conn
    global $conn;

    $role_menu = htmlspecialchars($data["role_menu"]);
    $nama = htmlspecialchars($data["nama"]);
    $detail = htmlspecialchars($data["detail"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);

    //upload gambar 
    $gambar = uploadMakanan();
    if(!$gambar) {
        return false;
    }

    //query untuk melakukan insert data makanan
    $query = "INSERT INTO makanan VALUES ('','$role_menu', '$gambar', '$nama', '$detail', '$harga', '$stok')";
    mysqli_query($conn, $query);

    //mengembalikan nilai apakah data berhasil di submit atau tidak
    return mysqli_affected_rows($conn);
}

function tambahMinuman($data) {
    
    //memanggil variabel global $conn
    global $conn;

    $role = htmlspecialchars($data["role"]);
    $nama = htmlspecialchars($data["nama"]);
    $detail = htmlspecialchars($data["detail"]);
    $harga = htmlspecialchars($data["harga"]);
    $stok = htmlspecialchars($data["stok"]);

    //upload gambar 
    $gambar = uploadMinuman();
    if(!$gambar) {
        return false;
    }

    //query untuk melakukan insert data minuman
    $query = "INSERT INTO minuman VALUES ('$role', '$gambar', '$nama', '$detail', '$harga', '$stok')";
    mysqli_query($conn, $query);

    //mengembalikan nilai apakah data berhasil di submit atau tidak
    return mysqli_affected_rows($conn);
}

function editMakanan($data) {
    
}

function uploadMakanan() {

    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yang diupload
    if($error === 4) {
        echo "<script>
            alert('Masukkan gambar terlebih dahulu');
        </script>";
        return false;
    }

    //cek apakah gamabr yang diupload adalah gambar
    $ekstensiGambarValid = ['svg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('gunakan format gambar yang benar');
        </script>";
        return false;
    }

    //cek jika ukuran gambar terlalu besar
    if($ukuranfile > 15728640) {
        echo "<script>
            alert('ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    //setelah melakukan pengecekan, upload gambar
    move_uploaded_file($tmpName, '../asset_database/makanan/' . $namafile);

    return $namafile;
}

function uploadMinuman() {

    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yang diupload
    if($error === 4) {
        echo "<script>
            alert('Masukkan gambar terlebih dahulu');
        </script>";
        return false;
    }

    //cek apakah gamabr yang diupload adalah gambar
    $ekstensiGambarValid = ['svg', 'png'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('gunakan format gambar yang benar');
        </script>";
        return false;
    }

    //cek jika ukuran gambar terlalu besar
    if($ukuranfile > 15728640) {
        echo "<script>
            alert('ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    //setelah melakukan pengecekan, upload gambar
    move_uploaded_file($tmpName, '../asset_database/minuman/' . $namafile);

    return $namafile;
}

?>