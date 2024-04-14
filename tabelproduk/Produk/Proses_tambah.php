<?php
    include('Tambah_produk.php');

    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $status = $_POST['status'];

    $query = "INSERT INTO produk (nama_produk, harga, stok, kategori, status) VALUES ('$nama_produk', '$harga', '$stok', '$kategori', '$status')";
    $result = mysqli_query($koneksi, $query);

    if(!$result) {
        die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='Table.php';</script>";
    }
?>