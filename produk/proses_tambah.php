<?php
    include('tambah_produk.php');
    include('../koneksi.php');
    
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    $stats = $_POST['stats'];

    $query = "INSERT INTO produk (nama_produk, harga, stok, deskripsi, stats) VALUES ('$nama_produk', '$harga', '$stok', '$deskripsi', '$stats')";
    $result = mysqli_query($koneksi, $query);

    if(!$result) {
       die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
   } else {
       echo "<script>alert('Data berhasil ditambahkan!');window.location='produk.php';</script>";
   }
?>
