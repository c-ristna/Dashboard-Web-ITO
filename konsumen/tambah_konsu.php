<?php
include '../koneksi.php';
?>
<link rel="stylesheet" href="../assets/css/data.css">
    <div class="tambah-data">
        <h1>Tambah Data Konsumen</h1>
    
    <form method="POST" action="proses_tambah.php" enctype="multipart/form">
        
        <section class="base">
            <div class="form"></div>
                <div>
                    <label for="id_konsumen">ID Konsumen</label>
                    <input type="text" id="form-control" name="id_konsumen" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Nama Konsumen</label>
                    <input type="text" id="form-control" name="nama_konsumen" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Alamat</label>
                    <input type="text" id="form-control" name="alamat" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">No Telepon</label>
                    <input type="text" id="form-control" name="no_telepon" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Terakhir Pembelian</label>
                    <input type="date" id="form-control" name="terakhir_pembelian" required="" /> <br>
                </div>
                <div class="button-container">
                    <button type="submit" name="kembali">Kembali</button>
                    <button type="submit" name="simpan">Tambah</button>
                </div>
        </section>
    </form>
</div>