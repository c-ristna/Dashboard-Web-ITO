<?php
include "../koneksi.php";

// Periksa apakah form telah disubmit
if (isset($_POST["simpan"])) {
    // Ambil nilai dari form
$tanggal            = $_POST['tanggal'];
$id_keuangan        = $_POST['id_keuangan'];
$pemasukan          = $_POST['pemasukan'];
$pengeluaran        = $_POST['pengeluaran'];
$saldo              = $_POST['saldo'];

    // Buat dan eksekusi query update
    $sql = "UPDATE keuangan SET 
                tanggal = '$tanggal',
                pemasukan = '$pemasukan',
                pengeluaran = '$pengeluaran',
                saldo = '$saldo'
            WHERE id_keuangan = '$id_konsumen'";

    $result = mysqli_query($koneksi, $sql);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        // Jika berhasil, arahkan ke halaman index.php
        $url = "keuangan.php";
        echo "<script>alert('Data berhasil diedit!');window.location='$url';</script>";
    } else {
        // Jika gagal, tampilkan pesan kesalahan
        echo "<script>alert('Query Error: " . mysqli_error($koneksi) . "');</script>";
    }
} else {
    // Jika form belum disubmit, tampilkan pesan bahwa proses edit belum dilakukan
    $pesan = "Proses edit belum dilakukan.";
    echo "<script>alert('$pesan');</script>";
}
?>
