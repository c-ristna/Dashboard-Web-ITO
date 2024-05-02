<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuangan</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../assets/css/tabel.css">
    <link rel="stylesheet" href="../assets/css/data.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!-- =============== Navigation Dashboard Keuangan ================ -->
    <?php include "../koneksi.php";?>  
    <?php include "../navigation_dash.php";?>
    <?php include "../main_dash.php";?> 
    <?php include "tabel_keuangan.php";?> 
    <!-- <?php include "edit_keuangan.php";?>  -->
    <!-- <?php include "hapus_keuangan.php";?>  -->
    <!-- <?php include "tambah_keuangan.php";?>  -->
    <!-- <?php include "proses_hapus.php";?>  -->
    
    <td>
        <a href="edit_keuangan.php?id=<?php echo $data['id_keuangan']; ?>">Edit</a>
    </td>

    <!-- =========== Scripts =========  -->
    <script src="../assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>