
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../assets/css/tabel.css">
    <link rel="stylesheet" href="../assets/css/data.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/df60d5ae41.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- =============== Navigation Dashboard Penjualan ================ --> 
    <?php include "../navigation_dash.php";?>
    <?php include "../main_dash2.php";?> 
    <?php include "tabel_penjualan.php";?> 
    <!-- <?php include "edit_penjualan.php";?>  -->
    <!-- <?php include "hapus_penjualan.php";?>  -->
    <!-- <?php include "tambah_penjualan.php";?>  -->
    <!-- <?php include "proses_hapus.php";?>  -->

    <td>
        <a href="edit_penjualan.php?id=<?php echo $data['id_penjualan']; ?>">Edit</a>
    </td>

    <!-- =========== Scripts =========  -->
    <script src="../assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>