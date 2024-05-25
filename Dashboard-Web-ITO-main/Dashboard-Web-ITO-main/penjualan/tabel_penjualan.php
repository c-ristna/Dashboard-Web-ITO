<div class="customer"></div>
<h2 class="main--title">Data Penjualan</h2>
<div class="tabular--wrapper">
    <div class="row-button">
        <ul class="left">
            <a class= "tambah" name="tambah" href="tambah_penjualan.php"><i class="fa fa-plus"></i> Tambah</a>
        </ul>
        <ul class="right">
            <a class= "filter" name="filter" href="filter.php"> Filter </a>
        </ul>  
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Konsumen</th>
                    <th scope="col">ID Penjualan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">List Produk</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Metode Pembayaran</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    // Secure database connection (replace "" with your strong password)
                    $koneksi = mysqli_connect("localhost", "root", "")
                            or die("Error connecting to MySQL: " . mysqli_error($koneksi));
                    
                    // Select the database ('ito')
                    mysqli_select_db($koneksi, "ito") or die("Error selecting database: " . mysqli_error($koneksi));
                    
                    $sql_penjualan = mysqli_query($koneksi, "SELECT * FROM penjualan LEFT JOIN konsumen USING(id_konsumen)");
                    
                    if (!$sql_penjualan) {
                        die("Error executing query: " . mysqli_error($koneksi)); // Handle errors gracefully
                    }
                    
                    // Use $total_products as needed
                    mysqli_close($koneksi); // Close the connection 
                        while($data = mysqli_fetch_array($sql_penjualan)) { 
                ?>  
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['id_konsumen']?></td>
                        <td><?php echo $data['id_penjualan']?></td>
                        <td><?php echo $data['tanggal']?></td>
                        <td><?php echo $data['list_produk']?></td>
                        <td><?php echo $data['total_harga']?></td>
                        <td><?php echo $data['metode_pembayaran']?></td>
                        <td><?php echo $data['status']?></td>
                        <td>
                            
                        <button onclick="window.location.href='edit_konsu.php?op=edit&id_penjualan=<?php echo $data['id_penjualan']; ?>'">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>

                            <button onclick="if(confirm('Anda yakin ingin hapus data ini?')) window.location.href='proses_hapus.php?id_penjualan=<?php echo $data['id_penjualan']; ?>'">
                                <i class="fa-solid fa-trash"></i>
                            </button>
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
