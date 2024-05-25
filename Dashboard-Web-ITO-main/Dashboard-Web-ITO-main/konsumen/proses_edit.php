<?php
include "../koneksi.php";

// Periksa apakah form telah disubmit
if (isset($_POST["simpan"])) {
    // Ambil nilai dari form
    $id_konsumen        = $_POST['id_konsumen'];
    $nama_konsumen      = $_POST['nama_konsumen'];
    $alamat             = $_POST['alamat'];
    $no_telepon         = $_POST['no_telepon'];
    $terakhir_pembelian = $_POST['terakhir_pembelian'];

    // Tambahkan echo untuk menampilkan nilai variabel
    // echo "ID Konsumen: $id_konsumen <br>";
    // echo "Nama Konsumen: $nama_konsumen <br>";
    // echo "Alamat: $alamat <br>";
    // echo "No. Telepon: $no_telepon <br>";
    // echo "Terakhir Pembelian: $terakhir_pembelian <br>";

    // Buat dan eksekusi query update
    $sql = "UPDATE konsumen SET 
                nama_konsumen = '$nama_konsumen',
                alamat = '$alamat',
                no_telepon = '$no_telepon',
                terakhir_pembelian = '$terakhir_pembelian'
            WHERE id_konsumen = '$id_konsumen'";

    $result = mysqli_query($koneksi, $sql);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        // Jika berhasil, arahkan ke halaman index.php
        $url = "konsumen.php";
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
