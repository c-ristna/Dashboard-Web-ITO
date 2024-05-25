<?php
include '../koneksi.php';

if (isset($_GET['id_keuangan'])) {
    $id_keuangan = $_GET['id_keuangan'];

    $sql = "DELETE FROM keuangan WHERE id_keuangan ='$id_keuangan'";
    $result = mysqli_query($koneksi, $sql);
    $url   = "keuangan.php"; // Ubah URL sesuai kebutuhan Anda

    if(!$result) {
        echo ("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil dihapus!');window.location='$url';</script>";
    } 
} else {
    $pesan = "ID keuangan tidak ditemukan.";
    echo "<script>alert('$pesan');window.location='$url';</script>";
}
?>
