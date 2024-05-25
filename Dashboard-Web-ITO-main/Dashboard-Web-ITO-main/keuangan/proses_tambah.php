<?php
include '../koneksi.php';

$tanggal            = "";
$pemasukan          = "";
$pengeluaran        = "";
$saldo              = "";

if (isset($_POST["simpan"])) {
    $tanggal            = $_POST['tanggal'];
    $id_keuangan        = $_POST['id_keuangan'];
    $pemasukan          = $_POST['pemasukan'];
    $pengeluaran        = $_POST['pengeluaran'];
    $saldo              = $_POST['saldo'];

    // Query SQL untuk menambahkan data konsumen
    $sql = "INSERT INTO keuangan (tanggal, pemasukan, pengeluaran, saldo) VALUES ('$tanggal', '$pemasukan', '$pengeluaran', '$saldo')";
    
    // Eksekusi query
    $result = mysqli_query($koneksi, $sql);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='keuangan.php';</script>";
    } else {
        echo ("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
}

?>
