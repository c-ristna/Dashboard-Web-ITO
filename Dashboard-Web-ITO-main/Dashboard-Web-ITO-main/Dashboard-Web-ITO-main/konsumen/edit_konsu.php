<?php
include '../koneksi.php';
?>
<link rel="stylesheet" href="../assets/css/data.css">

<?php
    $id_konsumen = $_GET['id_konsumen'];
    $sql         = "SELECT * FROM konsumen WHERE id_konsumen='$id_konsumen' ";
    $result      = mysqli_query($koneksi,$sql);
    $data        = mysqli_fetch_array($result);
?>

<div class="tambah-data">
    <h1>Edit Data Konsumen</h1>
    <form method="POST" action="proses_edit.php" enctype="multipart/form">
        
        <section class="base">
            <div class="form"></div>
                <div>
                    <label class="id_konsumen">ID Konsumen</label>
                    <input type="text" id="id_konsumen" name="id_konsumen" value="<?php echo "$data[id_konsumen]";?>" autofocus="" readonly
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Nama Konsumen</label>
                    <input type="text" id="nama_konsumen" name="nama_konsumen" value="<?php echo "$data[nama_konsumen]";?>" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="<?php echo "$data[alamat]";?>" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">No Telepon</label>
                    <input type="text" id="no_telepon" name="no_telepon"value="<?php echo "$data[no_telepon]";?>" required="" placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Terakhir Pembelian</label>
                    <input type="date" id="terakhir_pembelian" name="terakhir_pembelian" value="<?php echo "$data[terakhir_pembelian]";?>" required="" /> <br>
                </div>
                <div class="button-container">
                    <button type="submit">Kembali</button>
                    <button type="submit" name="simpan" id="simpan" >Simpan</button>
                </div>
        </section>
    </form>
</div>
