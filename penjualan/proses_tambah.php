<?php
include '../koneksi.php';

$tanggal            = "";
$list_produk        = "";
$total_harga        = "";
$metode_pembayaran  = "";
$status             = "";

if (isset($_POST["simpan"])) {
    $tanggal            = $_POST['tanggal'];
    $list_produk        = $_POST['list_produk'];
    $total_harga        = $_POST['total_harga'];
    $metode_pembayaran  = $_POST['metode_pembayaran'];
    $status             = $_POST['status'];

    // Query SQL untuk menambahkan data konsumen
    $sql = "INSERT INTO penjualan (tanggal, list_produk, total_harga, metode_pembayaran, status) VALUES ('$tanggal', '$list_produk', '$total_harga', '$metode_pembayaran', '$status')";
                                
    // Eksekusi query
    $result = mysqli_query($koneksi, $sql);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='penjualan.php';</script>";
    } else {
        echo ("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
}

?>
