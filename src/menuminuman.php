<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, Initial-scale=1.0">
    <link href="menuminuman.css" rel="stylesheet">
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
                    <img src="asset/minum1.svg" height="300px" />
                    <div id="judulMinuman">Ginger Beer</div>
                    <div id="deskripsi"> lezat, renyah, autentik,<br>segar, dan berbumbu.</div>
                    <div id="box_harga">25.000</div><br>
                    <input type="number" id="inputItem" name="ginger" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum2.svg" height="300px" />
                    <div id="judulMinuman">Arnold Palmer</div>
                    <div id="deskripsi">lezat, pedas, renyah,<br>gurih, dan menggiurkan.</div>
                    <div id="box_harga">25.000</div><br>
                    <input type="number" id="inputItem" name="arnold" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum3.svg" height="300px" />
                    <div id="judulMinuman">Cola</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">18.000</div><br>
                    <input type="number" id="inputItem" name="cola" placeholder="0">
                </div>
            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/minum4.svg" height="300px" />
                    <div id="judulMinuman">Rose Marilyn</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="rose" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum5.svg" height="300px" />
                    <div id="judulMinuman">Vodka Martini</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="vodka" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum6.svg" height="300px" />
                    <div id="judulMinuman">Orange</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="orange" placeholder="0">
                </div>

            </div>
            <div id="row_card">
                <div id="card_menu">
                    <img src="asset/minum7.svg" height="300px" />
                    <div id="judulMinuman">Mojito</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="mojito" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum8.svg" height="300px" />
                    <div id="judulMinuman">Strawberry daiquiris</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="strawberry" placeholder="0">
                </div>
                <div id="card_menu">
                    <img src="asset/minum9.svg" height="300px" />
                    <div id="judulMinuman">Caipiranha</div>
                    <div id="deskripsi">Ini makanan enak tau<br>semua harus beli</div>
                    <div id="box_harga">20.000</div><br>
                    <input type="number" id="inputItem" name="caipiranha" placeholder="0">
                </div>
            </div>
            <div id="row_card" style="justify-content: center;">
                <input type="submit" id="submit" name="submit" value="SUBMIT">
            </div>
        </form>
    </div>
</body>

</html>