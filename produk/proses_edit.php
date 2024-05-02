<?php
include "../koneksi.php";

  if (isset($_POST["simpan"])) {
      $nama_produk  = $_POST['nama_produk'];
      $harga        = $_POST['harga'];
      $stok         = $_POST['stok'];
      $deskripsi    = $_POST['deskripsi'];
      $stats        = $_POST['stats'];

      $sql = "UPDATE produk SET id_produk='$id_produk' nama_produk='$nama_produk',harga='$harga',stok='$stok',deskripsi='$deskripsi',stats='$stats' WHERE id_produk ='$id_produk'";

      $result = mysqli_query($koneksi, $sql);
      $url   = "produk.php"; // Ubah URL sesuai kebutuhan Anda

    if ($result) {
        echo "<script>alert('Data berhasil diedit!');window.location='$url';</script>";
    } else {
        die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
  }

?>