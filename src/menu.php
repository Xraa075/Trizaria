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

    <div id="welcome">WELCOME</div>
    <form id="boxmenu" action="" method="POST">
        <div id="sub_boxmenu_makan">
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/margaritha.svg" height="300px" />
                    <div id="judul">Margaritha</div>
                    <div id="deskripsi"> lezat, renyah, autentik,<br>segar, dan berbumbu.</div>
                    <div id="box_harga">75.000</div><br>
                    <input type="number" id="inputItem" name="margaritha" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/papperoni.svg" height="300px" />
                    <div id="judul">Papperoni</div>
                    <div id="deskripsi">lezat, pedas, renyah,<br>gurih, dan menggiurkan.</div>
                    <div id="box_harga">70.000</div><br>
                    <input type="number" id="inputItem" name="papperoni" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/sausage.svg" height="300px" />
                    <div id="judul">Sausage</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">72.000</div><br>
                    <input type="number" id="inputItem" name="sausage" placeholder="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/bbq.svg" height="300px" />
                    <div id="judul">BBQ</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">80.000</div><br>
                    <input type="number" id="inputItem" name="bbq" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/cheese.svg" height="300px" />
                    <div id="judul">Cheese</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">68.000</div><br>
                    <input type="number" id="inputItem" name="cheese" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/mushroom.svg" height="300px" />
                    <div id="judul">Mushroom</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">70.000</div><br>
                    <input type="number" id="inputItem" name="mushroom" placeholder="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/zaitun.svg" height="300px" />
                    <div id="judul">Zaitun</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">71.000</div><br>
                    <input type="number" id="inputItem" name="zaitun" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/sisilia.svg" height="300px" />
                    <div id="judul">Sisilia</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">75.000</div><br>
                    <input type="number" id="inputItem" name="sisilia" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/chickentandoori.svg" height="300px" />
                    <div id="judul">Chicken Tandoori</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">76.000</div><br>
                    <input type="number" id="inputItem" name="tandoori" placeholder="0">
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
                    <input type="number" id="inputItem" name="ginger" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum2.svg" height="300px" />
                    <div id="judul">Arnold Palmer</div>
                    <div id="deskripsi">lezat, pedas, renyah,<br>gurih, dan menggiurkan.</div>
                    <div id="box_harga">25.000</div><br>
                    <input type="number" id="inputItem" name="arnold" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum3.svg" height="300px" />
                    <div id="judul">Cola</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">18.000</div><br>
                    <input type="number" id="inputItem" name="cola" placeholder="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/minum4.svg" height="300px" />
                    <div id="judul">Rose Marilyn</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="rose" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum5.svg" height="300px" />
                    <div id="judul">Vodka Martini</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="vodka" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum6.svg" height="300px" />
                    <div id="judul">Orange</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="orange" placeholder="0">
                </div>

            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/minum7.svg" height="300px" />
                    <div id="judul">Mojito</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="mojito" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum8.svg" height="300px" />
                    <div id="judul">Strawberry daiquiris</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="strawberry" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum9.svg" height="300px" />
                    <div id="judul">Caipiranha</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="caipiranha" placeholder="0">
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