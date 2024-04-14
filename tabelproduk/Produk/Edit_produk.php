<?php include('Koneksi.php'); 
    if(isset($_GET['id'])) {
        $id = $_GET['id_produk'];
        $query = "SELECT * FROM produk where id = '$id'";
        $result = mysqli_query($koneksi, $query);
        if(!$result) {
            die("Query Error :".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)) {
            echo "<script>alert('Data tidak ditemukan pada tabel.');window.location='Table.php';</script>";
        }

    } else {
        echo "<script>alert('Masukkan ID yang ingin di edit');window.location='Table.php';</script>";
    }

?>
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
    <center><h1>Edit Produk <?php echo $data['nama_produk']; ?></h1></center>
    <form method="POST" action="Proses_edit.php" enctype="multipart/form">
    <section class="base">
        <div>
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" autofocus="" required="" value="<?php echo $data['nama_produk']; ?>" />
            <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>" />
        </div>
        <div>
            <label>Harga</label>
            <input type="text" name="harga" required="" value="<?php echo $data['harga']; ?>"/>
        </div>
        <div>
            <label>Stok</label>
            <input type="text" name="stok" required="" value="<?php echo $data['stok']; ?>"/>
        </div>
        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" required="" value="<?php echo $data['kategori']; ?>"/>
        </div>
        <div>
            <label>Status</label>
            <input type="text" name="status" required="" value="<?php echo $data['status']; ?>"/>
        </div>
        <div class="button-container">
        <button type="submit">Simpan</button>
        </div>
    </section>
    </form>
</body>
</html>