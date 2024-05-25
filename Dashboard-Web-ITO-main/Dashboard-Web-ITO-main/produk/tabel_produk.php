<div class="konsumen"></div>
<h2 class="main--title">Data Produk</h2>
<div class="tabular--wrapper">
    <div class="row-button">
        <ul class="left">
            <a class= "tambah" name="tambah" href="tambah_produk.php"><i class="fa fa-plus"></i> Tambah</a>
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
                    <th scope="col">ID Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
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
                        <td><?php echo $data['deskripsi']?></td>
                        <td><?php echo $data['stats']?></td>

                        <td>   
                            <button onclick="window.location.href='Edit_produk.php?op=edit&id_produk=<?php echo $data['id_produk']; ?>'">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
    
                                <button onclick="if(confirm('Anda yakin ingin hapus data ini?')) window.location.href='proses_hapus.php?id_produk=<?php echo $data['id_produk']; ?>'">
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