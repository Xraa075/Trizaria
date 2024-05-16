<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, Initial-scale=1.0">
    <link href="menumakanan.css" rel="stylesheet">
    <title>Menu</title>
</head>

<body>
    <div id="header">
        <img src="asset/LogoPizzaria.svg" width="290px" height="137" />
        <div id="ourmenuheader">
            OUR MENU
        </div>
        <div id="switchmenu">
            <div id="switchmakanan"><a href="menumakanan.php" style="all:unset">Pizza</a></div>
            <div>|</div>
            <div id="switchminuman"><a href="menuminuman.php" style="all:unset">Drink</a></div>
        </div>
    </div>

    <div id="welcome">WELCOME</div>
    <div id="boxmenu">
        <form id="sub_boxmenu" method="POST" action="">
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/margaritha.svg" height="300px" />
                    <div id="judulMakanan">Margaritha</div>
                    <div id="deskripsi"> lezat, renyah, autentik,<br>segar, dan berbumbu.</div>
                    <div id="box_harga">75.000</div><br>
                    <input type="number" id="inputItem" name="margaritha" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/papperoni.svg" height="300px" />
                    <div id="judulMakanan">Papperoni</div>
                    <div id="deskripsi">lezat, pedas, renyah,<br>gurih, dan menggiurkan.</div>
                    <div id="box_harga">70.000</div><br>
                    <input type="number" id="inputItem" name="papperoni" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/sausage.svg" height="300px" />
                    <div id="judulMakanan">Sausage</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">72.000</div><br>
                    <input type="number" id="inputItem" name="sausage" placeholder="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/bbq.svg" height="300px" />
                    <div id="judulMakanan">BBQ</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">80.000</div><br>
                    <input type="number" id="inputItem" name="bbq" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/cheese.svg" height="300px" />
                    <div id="judulMakanan">Cheese</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">68.000</div><br>
                    <input type="number" id="inputItem" name="cheese" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/mushroom.svg" height="300px" />
                    <div id="judulMakanan">Mushroom</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">70.000</div><br>
                    <input type="number" id="inputItem" name="mushroom" placeholder="0">
                </div>

            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/zaitun.svg" height="300px" />
                    <div id="judulMakanan">Zaitun</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">71.000</div><br>
                    <input type="number" id="inputItem" name="zaitun" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/sisilia.svg" height="300px" />
                    <div id="judulMakanan">Sisilia</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">75.000</div><br>
                    <input type="number" id="inputItem" name="sisilia" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/chickentandoori.svg" height="300px" />
                    <div id="judulMakanan">Chicken Tandoori</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">76.000</div><br>
                    <input type="number" id="inputItem" name="tandoori" placeholder="0">
                </div>
            </div>
            <div id="row_card" style="justify-content: center;">
                <input type="submit" id="submit" name="submit" value="SUBMIT">
            </div>
        </form>
    </div>
</body>

</html>