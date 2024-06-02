<?php
include '../koneksi.php';
?>
<link rel="stylesheet" href="../assets/css/data.css">
    <div class="tambah-data">
        <h1>Tambah Data Produk</h1>
    
        <form method="POST" action="proses_tambah.php" enctype="multipart/form">

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
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" required="" />
            </div>
            <div>
                <label>Status</label>
                <input type="text" name="stats" required="" />
            </div>
            <div class="button-container">
            <button type="submit">Kembali</button>
            <button type="submit">Tambah</button>
            </div>
        </section>
    </form>
</body>
</html>