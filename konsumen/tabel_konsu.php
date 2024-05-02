<div class="customer"></div>
<h2 class="main--title">Data Konsumen</h2>
<div class="tabular--wrapper">
    <div class="row-button">
        <ul class="left">
            <a class= "tambah" name="tambah" href="tambah_konsu.php"><i class="fa fa-plus"></i> Tambah</a>
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
                    <th scope="col">Nama Konsumen</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Terakhir Pembelian</th>
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
                    
                    $sql_konsumen = mysqli_query($koneksi, "SELECT * FROM konsumen");
                    
                    if (!$sql_konsumen) {
                        die("Error executing query: " . mysqli_error($koneksi)); // Handle errors gracefully
                    }
                    
                    // Use $total_products as needed
                    mysqli_close($koneksi); // Close the connection 
                        while($data = mysqli_fetch_array($sql_konsumen)) { 
                ?>  
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['id_konsumen']?></td>
                        <td><?php echo $data['nama_konsumen']?></td>
                        <td><?php echo $data['alamat']?></td>
                        <td><?php echo $data['no_telepon']?></td>
                        <td><?php echo $data['terakhir_pembelian']?></td>
                        <td>
                            <button onclick="window.location.href='edit_konsu.php?op=edit&id_admin=<?php echo $data['id_konsumen']; ?>'">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button onclick="if(confirm('Anda yakin ingin hapus data ini?')) window.location.href='proses_hapus.php?id_konsumen=<?php echo $data['id_konsumen']; ?>'">
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
