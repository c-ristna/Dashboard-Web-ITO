<?php
    include('Tambah_produk.php');

    $id = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $status = $_POST['status'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
    $query = "UPDATE produk SET nama_produk = '$nama_produk', harga = '$harga', stok = '$stok', kategori = '$kategori', status = '$status'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if(!$result) {
        die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil diubah!');window.location='Table.php';</script>";
    } 
    } else {
        $query = "INSERT INTO produk (nama_produk, harga, stok, kategori, status) VALUES ('$nama_produk', '$harga', '$stok', '$kategori', '$status'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil diubah!');window.location='Table.php';</script>";
        }
    }
?>