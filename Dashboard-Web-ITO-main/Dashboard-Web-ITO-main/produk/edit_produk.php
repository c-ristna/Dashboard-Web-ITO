<?php
include '../koneksi.php';
?>
<link rel="stylesheet" href="../assets/css/data.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
<?php
    $id_produk   = $_GET['id_produk'];
    $sql         = "SELECT * FROM produk WHERE id_produk='$id_produk' ";
    $query       = mysqli_query($koneksi,$sql);
    $data        = mysqli_fetch_array($query);
?>
    <center><h1>Edit Produk</h1></center>
    <form method="POST" action="proses_edit.php" enctype="multipart/form">
        <section class="base">
            <div class="form"></div>
                <div>
                    <label for="id_konsumen">ID Produk</label>
                    <input type="text" id="form-control" name="id_produk" value="<?php echo "$data[id_produk]";?>" autofocus="" readonly
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Nama Produk</label>
                    <input type="text" id="form-control" name="nama_konsumen" value="<?php echo "$data[nama_produk]";?>" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Harga</label>
                    <input type="text" id="form-control" name="harga" required="" value="<?php echo "$data[harga]";?>" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Stok</label>
                    <input type="text" id="form-control" name="stok"value="<?php echo "$data[stok]";?>" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Deskripsi</label>
                    <input type="text" id="form-control" name="deskripsi" value="<?php echo "$data[deskripsi]";?>" required="" /> <br>
                </div>
                <div>
                    <label class="form-label">Status</label>
                    <input type="teks" id="form-control" name="stats" value="<?php echo "$data[stats]";?>" required="" /> <br>
                </div>
                <div class="button-container">
                    <button type="submit">Kembali</button>
                    <button type="submit">Simpan</button>
                </div>
        </section>
    </form>
</body>
</html>