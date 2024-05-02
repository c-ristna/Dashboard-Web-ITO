<div class="customer"></div>
<h2 class="main--title">Data Admin</h2>
<div class="tabular--wrapper">
    <div class="row-button">
        <ul class="left">
            <a class= "tambah" name="tambah" href="tambah_admin.php"><i class="fa fa-plus"></i> Tambah</a>
        </ul>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Admin</th>
                    <th scope="col">Nama Admin</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
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
                    
                    $sql_admin = mysqli_query($koneksi, "SELECT * FROM admin");
                    
                    if (!$sql_admin) {
                        die("Error executing query: " . mysqli_error($koneksi)); // Handle errors gracefully
                    }
                    
                    // Use $total_products as needed
                    mysqli_close($koneksi); // Close the connection 
                        while($data = mysqli_fetch_array($sql_admin)) { 
                ?>  
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['id_admin']?></td>
                        <td><?php echo $data['nama_admin']?></td>
                        <td><?php echo $data['email']?></td>
                        <td><?php echo $data['password']?></td>
                        <td> 
                            <button onclick="window.location.href='edit_admin.php?op=edit&id_admin=<?php echo $data['id_admin']; ?>'">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button onclick="if(confirm('Anda yakin ingin hapus data ini?')) window.location.href='proses_hapus.php?id_admin=<?php echo $data['id_admin']; ?>'">
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
