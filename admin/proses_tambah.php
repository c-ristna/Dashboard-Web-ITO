<?php
include '../koneksi.php';

$nama_admin         = "";
$email              = "";
$password           = "";

if (isset($_POST["simpan"])) {
    $nama_admin      = $_POST['nama_admin'];
    $email           = $_POST['email'];
    $password        = $_POST['password'];

    // Query SQL untuk menambahkan data admin
    $sql = "INSERT INTO admin (nama_admin, email, password) VALUES ('$nama_admin', '$email', '$password')";

    // Eksekusi query
    $result = mysqli_query($koneksi, $sql);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='admin.php';</script>";
    } else {
        echo ("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
}
