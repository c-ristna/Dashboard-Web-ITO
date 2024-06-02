<?php
include '../koneksi.php';
?>
<link rel="stylesheet" href="../assets/css/data.css">

<?php
    $id_keuangan = $_GET['id_keuangan'];
    $sql         = "SELECT * FROM keuangan WHERE id_keuangan='$id_keuangan' ";
    $result      = mysqli_query($koneksi,$sql);
    $data        = mysqli_fetch_array($result);
?>

<div class="tambah-data">
    <h1>Edit Data Keuangan</h1>
    <form method="POST" action="proses_edit.php" enctype="multipart/form">
        
        <section class="base">
            <div class="form"></div>
                <div>
                    <label class="form-label">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" value="<?php echo "$data[tanggal]";?>" required="" /> 
                </div>
                <div>
                    <label for="id_keuangan">ID Keuangan</label>
                    <input type="text" id="id_keuangan" name="id_keuangan" value="<?php echo "$data[id_keuangan]";?>" autofocus="" readonly
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Pemasukan</label>
                    <input type="text" id="pemasukan" name="pemasukan" value="<?php echo "$data[pemasukan]";?>" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Pengeluaran</label>
                    <input type="text" id="pengeluaran" name="pengeluaran" value="<?php echo "$data[pengeluaran]";?>" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Saldo</label>
                    <input type="text" id="saldo" name="saldo"value="<?php echo "$data[saldo]";?>" required="" placeholder="Ketik disini" /> <br>
                </div>
                
                <div class="button-container">
                    <button type="submit">Kembali</button>
                    <button type="submit" name="simpan" id="simpan">Simpan</button>
                </div>
        </section>
    </form>
</div>
