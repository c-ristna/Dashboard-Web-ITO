<?php
include '../koneksi.php';

    // Periksa apakah form telah disubmit
    if (isset($_POST["simpan"])) {
        // Ambil nilai dari form
        $id_admin        = $_POST['id_admin'];
        $nama_admin      = $_POST['nama_admin'];
        $email           = $_POST['email'];
        $password        = $_POST['password'];

        // Tambahkan echo untuk menampilkan nilai variabel
        // echo "ID Admin: $id_admin <br>";
        // echo "Nama Admin: $nama_admin <br>";
        // echo "Email: $email <br>";
        // echo "Password: $password <br>";

        // Buat dan eksekusi query update
        $sql = "UPDATE admin SET nama_admin = '$nama_admin', email = '$email',  password = '$password' WHERE id_admin = '$id_admin' ";

        $result = mysqli_query($koneksi, $sql);

        // Periksa apakah query berhasil dieksekusi
        if ($result) {
            // Jika berhasil, arahkan ke halaman index.php
            $url = "admin.php";
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
