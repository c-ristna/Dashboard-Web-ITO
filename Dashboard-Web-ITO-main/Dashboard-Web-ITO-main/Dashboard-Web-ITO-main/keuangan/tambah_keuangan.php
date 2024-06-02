<?php
include '../koneksi.php';
?>
<link rel="stylesheet" href="../assets/css/data.css">
    <div class="tambah-data">
        <h1>Tambah Data Keuangan</h1>
    
    <form method="POST" action="proses_tambah.php" enctype="multipart/form">
        
        <section class="base">
            <div class="form"></div>
                <div>
                    <label class="form-label">Tanggal</label>
                    <input type="date" id="form-control" name="terakhir_pembelian" required="" /> <br>
                </div>
                <div>
                    <label for="id_keuangan">ID Keuangan</label>
                    <input type="text" id="form-control" name="id_keuangan" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Pemasukan</label>
                    <input type="text" id="form-control" name="pemasukan" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Pengeluaran</label>
                    <input type="text" id="form-control" name="pengeluaran" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Saldo</label>
                    <input type="text" id="form-control" name="saldo" required="" placeholder="Ketik disini" />
                </div>
                <div class="button-container">
                    <button type="submit" name="kembali">Kembali</button>
                    <button type="submit" name="simpan">Tambah</button>
                </div>
        </section>
    </form>
</div>