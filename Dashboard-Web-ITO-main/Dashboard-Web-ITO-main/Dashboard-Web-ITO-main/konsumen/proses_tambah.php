<?php
include '../koneksi.php';

$nama_konsumen      = "";
$alamat             = "";
$no_telepon         = "";
$terakhir_pembelian = "";

if (isset($_POST["simpan"])) {
    $nama_konsumen      = $_POST['nama_konsumen'];
    $alamat             = $_POST['alamat'];
    $no_telepon         = $_POST['no_telepon'];
    $terakhir_pembelian = $_POST['terakhir_pembelian'];

    // Query SQL untuk menambahkan data konsumen
    $sql = "INSERT INTO konsumen (nama_konsumen, alamat, no_telepon, terakhir_pembelian) VALUES ('$nama_konsumen', '$alamat', '$no_telepon', '$terakhir_pembelian')";
    
    // Eksekusi query
    $result = mysqli_query($koneksi, $sql);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='konsumen.php';</script>";
    } else {
        echo ("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
}

?>
