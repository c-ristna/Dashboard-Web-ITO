<div class="customer"></div>
<h2 class="main--title">Data Keuangan</h2>
<div class="tabular--wrapper">
    <div class="row-button">
        <ul class="left">
            <a class= "tambah" name="tambah" href="tambah_keuangan.php"><i class="fa fa-plus"></i> Tambah</a>
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
                    <th scope="col">Tanggal</th>
                    <th scope="col">ID Keuangan</th>
                    <th scope="col">Pemasukan</th>
                    <th scope="col">Pengeluaran</th>
                    <th scope="col">Saldo</th>
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
                    
                    $sql_keuangan = mysqli_query($koneksi, "SELECT * FROM keuangan");
                    
                    if (!$sql_keuangan) {
                        die("Error executing query: " . mysqli_error($koneksi)); // Handle errors gracefully
                    }
                    
                    // Use $total_products as needed
                    mysqli_close($koneksi); // Close the connection 
                        while($data = mysqli_fetch_array($sql_keuangan)) { 
                ?>  
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['tanggal']?></td>
                        <td><?php echo $data['id_keuangan']?></td>
                        <td><?php echo $data['pemasukan']?></td>
                        <td><?php echo $data['pengeluaran']?></td>
                        <td><?php echo $data['saldo']?></td>
                        <td>
                            
                        <button onclick="window.location.href='edit_keuangan.php?op=edit&id_keuangan=<?php echo $data['id_keuangan']; ?>'">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>

                            <button onclick="if(confirm('Anda yakin ingin hapus data ini?')) window.location.href='proses_hapus.php?id_keuangan=<?php echo $data['id_keuangan']; ?>'">
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
