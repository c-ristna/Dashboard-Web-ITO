<?php
include '../koneksi.php';
?>
<link rel="stylesheet" href="../assets/css/data.css">
    <div class="tambah-data">
        <h1>Tambah Data Penjualan</h1>
    
        <form method="POST" action="proses_tambah.php" enctype="multipart/form">
        
        <section class="base">
            <div class="form"></div>
                <div>
                    <label for="id_konsumen">ID Konsumen</label>
                    <input type="text" id="form-control" name="id_konsumen" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label for="id_penjualan">ID Penjualan</label>
                    <input type="text" id="form-control" name="id_penjualan" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Tanggal</label>
                    <input type="date" id="form-control" name="tanggal" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">List Produk</label>
                    <input type="text" id="form-control" name="list_produk" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Total Harga</label>
                    <input type="text" id="form-control" name="total_harga" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Metode Pembayaran</label>
                    <input type="text" id="form-control" name="metode_pembayaran" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Status</label>
                    <input type="text" id="form-control" name="status" required="" placeholder="Ketik disini" /> <br>
                </div>
                <div class="button-container">
                    <button type="submit" name="kembali">Kembali</button>
                    <button type="submit" name="simpan">Tambah</button>
                </div>
        </section>
    </form>
</div>