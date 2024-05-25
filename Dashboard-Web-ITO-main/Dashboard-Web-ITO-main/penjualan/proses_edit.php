<?php
include "../koneksi.php";

// Periksa apakah form telah disubmit
if (isset($_POST["simpan"])) {
    // Ambil nilai dari form
    $id_penjualan       = $_POST['id_konsumen'];
    $id_penjualan       = $_POST['id_penjualan'];
    $tanggal            = $_POST['tanggal'];
    $list_produk        = $_POST['list_produk'];
    $total_harga        = $_POST['total_harga'];
    $metode_pembayaran  = $_POST['metode_pembayaran'];
    $status             = $_POST['status'];

    // Tambahkan echo untuk menampilkan nilai variabel
    // echo "ID Konsumen: $id_konsumen <br>";
    // echo "ID Penjualan: $id_penjualan <br>";
    // echo "tanggal: $tanggal <br>";
    // echo "List Produk: $list_produk <br>";
    // echo "Total Harga: $total_harga <br>";
    // echo "Metode Pembayaran: $metode_pembayaran <br>";

    // Buat dan eksekusi query update
    $sql = "UPDATE penjualan SET 
                tanggal = '$tanggal',
                list_produk = '$list_produk',
                total_harga = '$total_harga',
                metode_pembayaran = '$metode_pembayaran'
            WHERE id_penjualan = '$id_penjualan'";

    $result = mysqli_query($koneksi, $sql);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        // Jika berhasil, arahkan ke halaman index.php
        $url = "penjualan.php";
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
