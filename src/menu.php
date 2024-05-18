<?php

session_start();

if (empty($_SESSION['nama_pembeli'])) {
    header("Location: inputnama_kasir.php");
    exit;
}
if (isset($_POST['submit'])) {
    $margaritha = isset($_POST['margaritha']) ? intval($_POST['margaritha']) : 0;
    $papperoni = isset($_POST['papperoni']) ? intval($_POST['papperoni']) : 0;
    $sausage = isset($_POST['sausage']) ? intval($_POST['sausage']) : 0;
    $bbq = isset($_POST['bbq']) ? intval($_POST['bbq']) : 0;
    $cheese = isset($_POST['cheese']) ? intval($_POST['cheese']) : 0;
    $mushroom = isset($_POST['mushroom']) ? intval($_POST['mushroom']) : 0;
    $zaitun = isset($_POST['zaitun']) ? intval($_POST['zaitun']) : 0;
    $sisilia = isset($_POST['sisilia']) ? intval($_POST['sisilia']) : 0;
    $tandoori = isset($_POST['tandoori']) ? intval($_POST['tandoori']) : 0;
    $ginger = isset($_POST['ginger']) ? intval($_POST['ginger']) : 0;
    $arnold = isset($_POST['arnold']) ? intval($_POST['arnold']) : 0;
    $cola = isset($_POST['cola']) ? intval($_POST['cola']) : 0;
    $rose = isset($_POST['rose']) ? intval($_POST['rose']) : 0;
    $vodka = isset($_POST['vodka']) ? intval($_POST['vodka']) : 0;
    $orange = isset($_POST['orange']) ? intval($_POST['orange']) : 0;
    $mojito = isset($_POST['mojito']) ? intval($_POST['mojito']) : 0;
    $strawberry = isset($_POST['strawberry']) ? intval($_POST['strawberry']) : 0;
    $caipiranha = isset($_POST['caipiranha']) ? intval($_POST['caipiranha']) : 0;

    $total_menu_dipesan = $margaritha + $papperoni + $sausage + $bbq + $cheese + $mushroom + $zaitun + $sisilia + $tandoori + $ginger + $arnold + $cola + $rose + $vodka + $orange + $mojito + $strawberry + $caipiranha;

    $total_harga_margaritha = $margaritha * 75000;
    $total_harga_papperoni = $papperoni * 70000;
    $total_harga_sausage = $sausage * 72000;
    $total_harga_bbq = $bbq * 80000;
    $total_harga_cheese = $cheese * 68000;
    $total_harga_mushroom = $mushroom * 70000;
    $total_harga_zaitun = $zaitun * 71000;
    $total_harga_sisilia = $sisilia * 75000;
    $total_harga_tandoori = $tandoori * 76000;
    $total_harga_ginger = $ginger * 25000;
    $total_harga_arnold = $arnold * 25000;
    $total_harga_cola = $cola * 18000;
    $total_harga_rose = $rose * 20000;
    $total_harga_vodka = $vodka * 20000;
    $total_harga_orange = $orange * 20000;
    $total_harga_mojito = $mojito * 20000;
    $total_harga_strawberry = $strawberry * 20000;
    $total_harga_caipiranha = $caipiranha * 20000;

    $total = $total_harga_margaritha + $total_harga_papperoni + $total_harga_sausage + $total_harga_bbq + $total_harga_cheese + $total_harga_mushroom + $total_harga_zaitun + $total_harga_sisilia + $total_harga_tandoori + $total_harga_ginger + $total_harga_arnold + $total_harga_cola + $total_harga_rose + $total_harga_vodka + $total_harga_orange + $total_harga_mojito + $total_harga_strawberry + $total_harga_caipiranha;

    $_SESSION['total'] = $total;
    $_SESSION['margaritha'] = $margaritha;
    $_SESSION['papperoni'] = $papperoni;
    $_SESSION['sausage'] = $sausage;
    $_SESSION['bbq'] = $bbq;
    $_SESSION['cheese'] = $cheese;
    $_SESSION['mushroom'] = $mushroom;
    $_SESSION['zaitun'] = $zaitun;
    $_SESSION['sisilia'] = $sisilia;
    $_SESSION['tandoori'] = $tandoori;
    $_SESSION['ginger'] = $ginger;
    $_SESSION['arnold'] = $arnold;
    $_SESSION['cola'] = $cola;
    $_SESSION['rose'] = $rose;
    $_SESSION['vodka'] = $vodka;
    $_SESSION['orange'] = $orange;
    $_SESSION['mojito'] = $mojito;
    $_SESSION['strawberry'] = $strawberry;
    $_SESSION['caipiranha'] = $caipiranha;
    $_SESSION['total_menu_dipesan'] = $total_menu_dipesan;
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
                    <img src="asset/margaritha.svg" height="300px" />
                    <div id="judul">Margaritha</div>
                    <div id="deskripsi"> lezat, renyah, autentik,<br>segar, dan berbumbu.</div>
                    <div id="box_harga">75.000</div><br>
                    <input type="number" id="inputItem" name="margaritha" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/papperoni.svg" height="300px" />
                    <div id="judul">Papperoni</div>
                    <div id="deskripsi">lezat, pedas, renyah,<br>gurih, dan menggiurkan.</div>
                    <div id="box_harga">70.000</div><br>
                    <input type="number" id="inputItem" name="papperoni" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/sausage.svg" height="300px" />
                    <div id="judul">Sausage</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">72.000</div><br>
                    <input type="number" id="inputItem" name="sausage" value="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/bbq.svg" height="300px" />
                    <div id="judul">BBQ</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">80.000</div><br>
                    <input type="number" id="inputItem" name="bbq" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/cheese.svg" height="300px" />
                    <div id="judul">Cheese</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">68.000</div><br>
                    <input type="number" id="inputItem" name="cheese" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/mushroom.svg" height="300px" />
                    <div id="judul">Mushroom</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">70.000</div><br>
                    <input type="number" id="inputItem" name="mushroom" value="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/zaitun.svg" height="300px" />
                    <div id="judul">Zaitun</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">71.000</div><br>
                    <input type="number" id="inputItem" name="zaitun" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/sisilia.svg" height="300px" />
                    <div id="judul">Sisilia</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">75.000</div><br>
                    <input type="number" id="inputItem" name="sisilia" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/chickentandoori.svg" height="300px" />
                    <div id="judul">Chicken Tandoori</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">76.000</div><br>
                    <input type="number" id="inputItem" name="tandoori" value="0">
                </div>
            </div>
            <div id="row_card" style="justify-content: center;">
                <input type="submit" id="submit" name="submit" value="SUBMIT">
            </div>
        </div>
        <div id="sub_boxmenu_minum">
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/minum1.svg" height="300px" />
                    <div id="judul">Ginger Beer</div>
                    <div id="deskripsi"> lezat, renyah, autentik,<br>segar, dan berbumbu.</div>
                    <div id="box_harga">25.000</div><br>
                    <input type="number" id="inputItem" name="ginger" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum2.svg" height="300px" />
                    <div id="judul">Arnold Palmer</div>
                    <div id="deskripsi">lezat, pedas, renyah,<br>gurih, dan menggiurkan.</div>
                    <div id="box_harga">25.000</div><br>
                    <input type="number" id="inputItem" name="arnold" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum3.svg" height="300px" />
                    <div id="judul">Cola</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">18.000</div><br>
                    <input type="number" id="inputItem" name="cola" value="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/minum4.svg" height="300px" />
                    <div id="judul">Rose Marilyn</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="rose" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum5.svg" height="300px" />
                    <div id="judul">Vodka Martini</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="vodka" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum6.svg" height="300px" />
                    <div id="judul">Orange</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="orange" value="0">
                </div>

            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/minum7.svg" height="300px" />
                    <div id="judul">Mojito</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="mojito" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum8.svg" height="300px" />
                    <div id="judul">Strawberry daiquiris</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="strawberry" value="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum9.svg" height="300px" />
                    <div id="judul">Caipiranha</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
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