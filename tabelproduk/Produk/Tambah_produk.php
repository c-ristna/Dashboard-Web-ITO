<?php include('Koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }
        h1 {
            text-transform: uppercase;
            color: black;
        }
        .base {
            width: 400px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ededed;
        }
        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }
        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: salmon;
        }
        button {
            background-color: #F68716;
            color: black;
            padding: 10px;
            font-size: 12px;
            border: 0;
            margin-top: 20px;
        }
        .button-container {
        display: flex; /* Enable flexbox layout */
        justify-content: space-between; /* Distribute buttons evenly */
        }
    </style>
</head>
<body>
    <center><h1>Tambah Data Produk</h1></center>
    <form method="POST" action="Proses_tambah.php" enctype="multipart/form">
    <section class="base">
        <div>
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" autofocus="" required="" />
        </div>
        <div>
            <label>Harga</label>
            <input type="text" name="harga" required="" />
        </div>
        <div>
            <label>Stok</label>
            <input type="text" name="stok" required="" />
        </div>
        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" required="" />
        </div>
        <div>
            <label>Status</label>
            <input type="text" name="status" required="" />
        </div>
        <div class="button-container">
        <button type="submit">Kembali</button>
        <button type="submit">Tambah</button>
        </div>
    </section>
    </form>
</body>
</html>