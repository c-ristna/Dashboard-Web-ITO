<?php include('Koneksi.php'); ?>
<!DOCTYPE html>

<html>
<head>
    <title>Data Produk</title>
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }
        h1 {
            text-transform: uppercase;
        }
        table thead th {
            background-color: #F68716;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav a { /* Target links within a navigation menu (assuming your link is within a nav) */
        background-color: #F68716;
        color: white;
        padding: 10px;
        text-align: center;
        }
        .fas {
        font-size: 18px;
        margin: 5px;
        padding: 5px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>
   <div class="table_body"></div>
    <?php
    session_start();
    ?>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: Left;margin-bottom: 30px">Data Produk</h2> <br>
            <nav><a href="Tambah_produk.php">+ &nbsp; Tambah</a></nav>
            <br>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th style="text-align: center;">Aksi</th>
                  </p></th>
                </tr>
              </thead>
              <tbody>
                    <?php
                        $no = 1;
                        // Secure database connection (replace "" with your strong password)
                        $con = mysqli_connect("localhost", "root", "")
                               or die("Error connecting to MySQL: " . mysqli_error($con));
                        
                        // Select the database (assuming you want to use 'ito')
                        mysqli_select_db($con, "ito") or die("Error selecting database: " . mysqli_error($con));
                        
                        $sql_produk = mysqli_query($con, "SELECT * FROM produk");
                        
                        if (!$sql_produk) {
                            die("Error executing query: " . mysqli_error($con)); // Handle errors gracefully
                        }
                        
                        $total_products = mysqli_num_rows($sql_produk);
                        
                        // Use $total_products as needed
                        mysqli_close($con); // Close the connection 
                            while($data = mysqli_fetch_array($sql_produk)) { 
                    ?>
                    
                            
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id_produk']?></td>
                            <td><?php echo $data['nama_produk']?></td>
                            <td>Rp<?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
                            <td><?php echo $data['stok']?></td>
                            <td><?php echo $data['kategori']?></td>
                            <td><?php echo $data['status']?></td>
                            <td style="text-align: center;">
                                <a href="Edit_produk.php?id=<?php echo $row['id']; ?>">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="Proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin hapus data ini?')">
                                <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
              </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>
