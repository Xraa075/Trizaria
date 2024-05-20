<?php

require 'koneksi.php';
session_start();

if (empty($_SESSION['nama_pembeli'])) {
    header("Location: inputnama_kasir.php");
    exit;
}

if (isset($_POST['submit'])) {
    $margaritha = isset($_POST['margaritha']) ? intval($_POST['margaritha']) : 0;
    $pepperoni = isset($_POST['pepperoni']) ? intval($_POST['pepperoni']) : 0;
    $sausage = isset($_POST['sausage']) ? intval($_POST['sausage']) : 0;
    $beef_cheese = isset($_POST['beef_cheese']) ? intval($_POST['beef_cheese']) : 0;
    $double_cheese = isset($_POST['double_cheese']) ? intval($_POST['double_cheese']) : 0;
    $mushroom = isset($_POST['mushroom']) ? intval($_POST['mushroom']) : 0;
    $zaitun = isset($_POST['zaitun']) ? intval($_POST['zaitun']) : 0;
    $sisilia = isset($_POST['sisilia']) ? intval($_POST['sisilia']) : 0;
    $tandori = isset($_POST['tandori']) ? intval($_POST['tandori']) : 0;
    // $ginger = isset($_POST['ginger']) ? intval($_POST['ginger']) : 0;
    // $arnold = isset($_POST['arnold']) ? intval($_POST['arnold']) : 0;
    // $cola = isset($_POST['cola']) ? intval($_POST['cola']) : 0;
    // $rose = isset($_POST['rose']) ? intval($_POST['rose']) : 0;
    // $vodka = isset($_POST['vodka']) ? intval($_POST['vodka']) : 0;
    // $orange = isset($_POST['orange']) ? intval($_POST['orange']) : 0;
    // $mojito = isset($_POST['mojito']) ? intval($_POST['mojito']) : 0;
    // $strawberry = isset($_POST['strawberry']) ? intval($_POST['strawberry']) : 0;
    // $caipiranha = isset($_POST['caipiranha']) ? intval($_POST['caipiranha']) : 0;

    // $total_menu_dipesan = $margaritha + $papperoni + $sausage + $bbq + $cheese + $mushroom + $zaitun + $sisilia + $tandoori + $ginger + $arnold + $cola + $rose + $vodka + $orange + $mojito + $strawberry + $caipiranha;

    // $total_harga_margaritha = $margaritha * 75000;
    // $total_harga_papperoni = $papperoni * 70000;
    // $total_harga_sausage = $sausage * 72000;
    // $total_harga_bbq = $bbq * 80000;
    // $total_harga_cheese = $cheese * 68000;
    // $total_harga_mushroom = $mushroom * 70000;
    // $total_harga_zaitun = $zaitun * 71000;
    // $total_harga_sisilia = $sisilia * 75000;
    // $total_harga_tandoori = $tandoori * 76000;
    // $total_harga_ginger = $ginger * 25000;
    // $total_harga_arnold = $arnold * 25000;
    // $total_harga_cola = $cola * 18000;
    // $total_harga_rose = $rose * 20000;
    // $total_harga_vodka = $vodka * 20000;
    // $total_harga_orange = $orange * 20000;
    // $total_harga_mojito = $mojito * 20000;
    // $total_harga_strawberry = $strawberry * 20000;
    // $total_harga_caipiranha = $caipiranha * 20000;

    // $total = $total_harga_margaritha + $total_harga_papperoni + $total_harga_sausage + $total_harga_bbq + $total_harga_cheese + $total_harga_mushroom + $total_harga_zaitun + $total_harga_sisilia + $total_harga_tandoori + $total_harga_ginger + $total_harga_arnold + $total_harga_cola + $total_harga_rose + $total_harga_vodka + $total_harga_orange + $total_harga_mojito + $total_harga_strawberry + $total_harga_caipiranha;

    // $_SESSION['total'] = $total;
    $_SESSION['margaritha'] = $margaritha;
    $_SESSION['pepperoni'] = $pepperoni;
    $_SESSION['sausage'] = $sausage;
    $_SESSION['beef_cheese'] = $beef_cheese;
    $_SESSION['double_cheese'] = $double_cheese;
    $_SESSION['mushroom'] = $mushroom;
    $_SESSION['zaitun'] = $zaitun;
    $_SESSION['sisilia'] = $sisilia;
    $_SESSION['tandori'] = $tandori;
    // $_SESSION['ginger'] = $ginger;
    // $_SESSION['arnold'] = $arnold;
    // $_SESSION['cola'] = $cola;
    // $_SESSION['rose'] = $rose;
    // $_SESSION['vodka'] = $vodka;
    // $_SESSION['orange'] = $orange;
    // $_SESSION['mojito'] = $mojito;
    // $_SESSION['strawberry'] = $strawberry;
    // $_SESSION['caipiranha'] = $caipiranha;
    // $_SESSION['total_menu_dipesan'] = $total_menu_dipesan;
    header("Location: order_kasir.php");
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, Initial-scale=1.0">
    <link href="menu.css" rel="stylesheet">
    <title>Menu</title>
</head>

<body>
    <div id="header">
        <img src="asset/LogoPizzaria.svg" width="290px" height="137" />
        <div id="ourmenuheader">
            OUR MENU
        </div>
        <div id="switchmenu">
            <div id="switchmakanan" onclick="tampilmakan()">Pizza</div>
            <div>|</div>
            <div id="switchminuman" onclick="tampilminum()">Drink</div>
        </div>
    </div>

    <div id="welcome">WELCOME <?php echo htmlspecialchars($_SESSION['nama_pembeli']); ?></div>
    <form id="boxmenu" action="" method="POST">
        <div id="sub_boxmenu_makan">
            <div id="row_card">
                <div id="card_menu">
                    <?php print($Margaritha['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Margaritha['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Margaritha['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Margaritha['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="margaritha" placeholder="0">
                </div>
                <div id="card_menu">
                    <?php print($Pepperoni['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Pepperoni['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Pepperoni['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Pepperoni['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="pepperoni" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Sausage['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Sausage['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Sausage['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Sausage['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="sausage" value="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <?php print($Beef_cheese['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Beef_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Beef_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Beef_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="beef_cheese" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Double_cheese['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Double_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Double_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Double_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="double_cheese" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Mushroom['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Mushroom['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Mushroom['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Mushroom['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="mushroom" value="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <?php print($Zaitun['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Zaitun['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Zaitun['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Zaitun['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="zaitun" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Sisilia['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Sisilia['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Sisilia['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Sisilia['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="sisilia" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Chicken_tandori['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Chicken_tandori['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Chicken_tandori['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Chicken_tandori['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="chicken_tandori" value="0">
                </div>
            </div>
            <div id="row_card" style="justify-content: center;">
                <input type="submit" id="submit" name="submit" value="SUBMIT">
            </div>
        </div>
        <div id="sub_boxmenu_minum">
            <div id="row_card">
                <div id="card_menu">
                    <?php print($Ice_cola['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Beef_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Beef_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Beef_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="ginger" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Beef_cheese['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Beef_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Beef_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Beef_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="arnold" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Beef_cheese['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Beef_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Beef_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Beef_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="cola" value="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <?php print($Beef_cheese['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Beef_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Beef_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Beef_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="rose" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Beef_cheese['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Beef_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Beef_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Beef_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="vodka" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Beef_cheese['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Beef_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Beef_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Beef_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="orange" value="0">
                </div>

            </div>
            <div id="row_card">
                <div id="card_menu">
                    <?php print($Beef_cheese['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Beef_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Beef_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Beef_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="mojito" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Beef_cheese['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Beef_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Beef_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Beef_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="strawberry" value="0">
                </div>
                <div id="card_menu">
                    <?php print($Beef_cheese['gambar']); ?>
                    <div id="judul"> <?php echo htmlspecialchars($Beef_cheese['nama']); ?> </div>
                    <div id="deskripsi"> <?php echo htmlspecialchars($Beef_cheese['detail']); ?> </div>
                    <div id="box_harga"> <?php echo htmlspecialchars($Beef_cheese['harga']); ?> </div><br>
                    <input type="number" id="inputItem" name="caipiranha" value="0">
                </div>
            </div>
            <div id="row_card" style="justify-content: center;">
                <input type="submit" id="submit" name="submit" value="SUBMIT">
            </div>
        </div>
    </form>
    <script>
        function tampilmakan() {
            sub_boxmenu_makan.style.display = "flex";
            sub_boxmenu_minum.style.display = "none";
            switchmakanan.style.color = "#FF9C3D";
            switchminuman.style.color = "white";
        }

        function tampilminum() {
            sub_boxmenu_makan.style.display = "none";
            sub_boxmenu_minum.style.display = "flex";
            switchmakanan.style.color = "white";
            switchminuman.style.color = "#FF9C3D";
        }
    </script>
</body>

</html>