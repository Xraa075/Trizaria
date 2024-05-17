


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background: url('asset/bg.svg') no-repeat center center fixed;
    background-size: cover;
}

.logo{
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

.header h1{
    color: white;
    margin-left: 100px;
}

 .input input{
    display: block;
    margin-top: 15px;
    margin-left: 100px;
    border: #FF9C3D solid 2px;
    outline: none;
    background-color: black;
    width: 1000px;
    height: 50px;
    border-radius: 50px;
    padding-left:20px;
    font-size: 18px;
    color: white;
    box-sizing: border-box;
}

.input .file-input {
    position: relative;
    text-align: right;
    padding-top: 10px;
    box-sizing: border-box;
}

.input .file-input::before {
    content: 'Choose File';
    color: white;
    cursor: pointer;
    right: 20px;
}

.input .file-input::-webkit-file-upload-button {
    visibility: hidden;
}

.input .file-input::-moz-file-upload-button {
    visibility: hidden;
}

.input .file-input::file-selector-button {
    visibility: hidden;
}


#submit{
    border: none;
    margin-top: 15px;
    margin-left: 100px;
    width: 1000px;
    height: 50px;
    border-radius: 50px;
    background-color: #FF9C3D;
    font-size: 20px;
    font-weight: 600;
}

#submit:hover{
    background-color: #e88b32;
}


    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="asset/logoo.svg" alt="">
        </div>

        <div class="header">
            <h1>Detail Makanan</h1>
        </div>

        <form enctype="multipart/form-data" action="submit.php" method="POST">
        <div class="input">
            <input type="file" name="gambar" class="file-input"> 
            <input type="text" name="nama" placeholder="Nama Produk">
            <input type="text" name="detail" placeholder="Detail Produk">
            <input type="text" name="harga" placeholder="Harga Produk">
            <input type="text" name="stok" placeholder="Stok Produk">
        </div>
        <button type="submit" id="submit" name="submit" addEvenListener>Submit</button>
        </form>
    </div>
    
<script>
    var element = document.getElementById("submit");

    element.addEventListener("click", myFunction);

function myFunction() {
  alert("Berhasil Menambahkan Menu");
}

</script>

</body>
</html>