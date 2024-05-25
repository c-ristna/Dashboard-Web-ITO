<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard ITO</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/df60d5ae41.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    session_start();

    if (isset($_SESSION['status_login']) && $_SESSION['status_login'] !== true) {
    header('Location: ../login/login.php'); // Use header() for redirection
    exit; 
    }
    ?>

    <!-- =============== Koneksi ================ -->
    <?php include "koneksi.php";?>  
    <!-- =============== Navigation Dashboard Utama ================ -->
    <?php include "navigation_dash.php"; ?>
    <!-- ========================= Main ==================== -->
    <?php include "main_dash.php"; ?>
    <!-- ======================= Cards ================== -->
    <?php include "cardbox_dash.php"; ?>
    <!-- ================ Order Details List ================= -->
    <?php include "order_dash.php"; ?>
    <!-- ================= New Customers ================ -->
    <?php include "customer_dash.php"; ?>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
</body>

</html>
