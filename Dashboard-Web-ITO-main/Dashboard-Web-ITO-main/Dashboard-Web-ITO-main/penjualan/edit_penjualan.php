<?php
include '../koneksi.php';
?>
<link rel="stylesheet" href="../assets/css/data.css">

<?php
    $id_konsumen = $_GET['id_penjualan'];
    $sql         = "SELECT * FROM penjualan WHERE id_penjualan='$id_penjualan'";
    $result      = mysqli_query($koneksi,$sql);
    $data        = mysqli_fetch_array($result);
?>

<div class="tambah-data">
    <h1>Edit Data Penjualan</h1>
    <form method="POST" action="proses_edit.php" enctype="multipart/form">
        
        <section class="base">
            <div class="form"></div>
                <div>
                    <label for="id_konsumen">ID Konsumen</label>
                    <input type="text" id="id_konsumen" name="id_konsumen" value="<?php echo "$data[id_konsumen]";?>" autofocus="" readonly
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label for="id_penjualan">ID Penjualan</label>
                    <input type="text" id="id_penjualan" name="id_penjualan" value="<?php echo "$data[id_penjualan]";?>" autofocus="" readonly
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" value="<?php echo "$data[tanggal]";?>" autofocus="" readonly
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">List Produk</label>
                    <input type="text" id="list_produk" name="list_produk" value="<?php echo "$data[list_produk]";?>" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Total Harga</label>
                    <input type="text" id="total_harga" name="total_harga" value="<?php echo "$data[total_harga]";?>" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Metode Pembayaran</label>
                    <input type="text" id="metode_pembayaran" name="metode_pembayaran"value="<?php echo "$data[metode_pembayaran]";?>" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Status</label>
                    <input type="text" id="status" name="status" value="<?php echo "$data[status]";?>" required="" placeholder="Ketik disini" /> <br>
                </div>
                <div class="button-container">
                    <button type="submit">Kembali</button>
                    <button type="submit" name="simpan" id="simpan">Simpan</button>
                </div>
        </section>
    </form>
</div>
