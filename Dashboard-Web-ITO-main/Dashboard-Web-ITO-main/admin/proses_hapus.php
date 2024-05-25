<?php
include '../koneksi.php';

if (isset($_GET['id_admin'])) {
    $id_admin = $_GET['id_admin'];

    $sql = "DELETE FROM admin WHERE id_admin ='$id_admin'";
    $result = mysqli_query($koneksi, $sql);
    $url   = "index.php"; // Ubah URL sesuai kebutuhan Anda

    if(!$result) {
        echo ("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil dihapus!');window.location='$url';</script>";
    } 
} else {
    $pesan = "ID admin tidak ditemukan.";
    echo "<script>alert('$pesan');window.location='$url';</script>";
}
?>
