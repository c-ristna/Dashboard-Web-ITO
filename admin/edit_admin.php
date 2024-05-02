<?php
include '../koneksi.php';
?>
<link rel="stylesheet" href="../assets/css/data.css">

<?php
    $id_admin    = $_GET['id_admin'];
    $sql         = "SELECT * FROM admin WHERE id_admin='$id_admin' ";
    $result      = mysqli_query($koneksi,$sql);
    $data        = mysqli_fetch_array($result);
?>

<div class="tambah-data">
    <h1>Edit Data Admin</h1>
    <form method="POST" action="proses_edit.php" enctype="multipart/form">  
        <section class="base">
            <div class="form"></div>
                <div>
                    <label for="id_admin">ID</label>
                    <input type="text" id="id_admin" name="id_admin" value="<?php echo "$data[id_admin]";?>" autofocus="" readonly
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label for="form-label">Nama Admin</label>
                    <input type="text" id="nama_admin" name="nama_admin" value="<?php echo "$data[nama_admin]";?>" autofocus=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo "$data[email]";?>" autofocus="" required=""
                        placeholder="Ketik disini" />
                </div>
                <div>
                    <label class="form-label">Password</label>
                    <input type="text" id="password" name="password" value="<?php echo "$data[password]";?>" required="" placeholder="Ketik disini" />
                </div>
                <div>
                <div class="button-container">
                    <button type="submit">Kembali</button>
                    <button type="submit" name="simpan" id="simpan">Simpan</button>
                </div>
        </section>
    </form>
</div>
