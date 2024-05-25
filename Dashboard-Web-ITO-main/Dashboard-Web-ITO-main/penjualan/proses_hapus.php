<?php
include '../koneksi.php';

if (isset($_GET['id_penjualan'])) {
    $id_penjualan = $_GET['id_penjualan'];

    $sql = "DELETE FROM penjualan WHERE id_penjualan ='$id_penjualan'";
    $result = mysqli_query($koneksi, $sql);
    $url   = "index.php"; // Ubah URL sesuai kebutuhan Anda

    if(!$result) {
        echo ("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil dihapus!');window.location='$url';</script>";
    } 
} else {
    $pesan = "ID penjualan tidak ditemukan.";
    echo "<script>alert('$pesan');window.location='$url';</script>";
}
?>
