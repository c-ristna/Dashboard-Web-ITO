<?php
include '../koneksi.php';

if (isset($_GET['id_konsumen'])) {
    $id_konsumen = $_GET['id_konsumen'];

    $sql = "DELETE FROM konsumen WHERE id_konsumen ='$id_konsumen'";
    $result = mysqli_query($koneksi, $sql);
    $url   = "konsumen.php"; // Ubah URL sesuai kebutuhan Anda

    if(!$result) {
        echo ("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil dihapus!');window.location='$url';</script>";
    } 
} else {
    $pesan = "ID konsumen tidak ditemukan.";
    echo "<script>alert('$pesan');window.location='$url';</script>";
}
?>
