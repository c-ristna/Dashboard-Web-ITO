<?php
include '../koneksi.php';
?>
<link rel="stylesheet" href="../assets/css/data.css">
<div class="tambah-data">
    <h1>Tambah Data Admin</h1>

    <form method="POST" action="proses_tambah.php" enctype="multipart/form">

        <section class="base">
            <div class="form"></div>
            <div>
                <label for="form-label">ID Admin</label>
                <input type="text" id="id_admin" name="id_admin" autofocus="" required="" placeholder="Ketik disini" />
            </div>
            <div>
                <label for="form-label">Nama Admin</label>
                <input type="text" id="nama_admin" name="nama_admin" autofocus="" required="" placeholder="Ketik disini" />
            </div>
            <div>
                <label class="form-label">Email</label>
                <input type="text" id="email" name="email" autofocus="" required="" placeholder="Ketik disini" />
            </div>

            <div>
                <label for="form-label">Password</label>
                <input type="text" id="password" name="password" autofocus="" required="" placeholder="Ketik disini" />
            </div>

            <div class="button-container">
                <button type="submit" name="kembali">Kembali</button>
                <button type="submit" name="simpan">Tambah</button>
            </div>

        </section>
    </form>
</div>