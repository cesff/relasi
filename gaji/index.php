<html>
<title>Data Gaji</title>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<body>
    <center>
    <nav class="center navbar-light bg-dark">
  <a class="navbar-brand"><font color="white">DATA KARYAWAN & GAJI</font</a>
</nav>
<br>

            <table class="table table-striped">
            <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Karyawan</th>
      <th scope="col">Gaji Pokok</th>
      <th scope="col"><center>Aksi</center></th>
        </tr>
                

                <?php
                include '../koneksi.php';
                $gaji = new Gaji();
                $no = 1;
                foreach ($gaji->index() as $data) {
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['karyawan_nama']; ?></td>
                        <td><?php echo $data['gaji_pokok']; ?></td>
                        <td><button type="button" class="btn btn-success"><a href="show.php?gaji_id=<?php echo $data['gaji_id']; ?>"><font color="white">Show</font></a></button>
                            <button type="button" class="btn btn-danger"><a href="edit.php?gaji_id=<?php echo $data['gaji_id']; ?>"><font color="white">Edit</font></a></button>
                            <button type="button" class="btn btn-warning"><a href="proses.php?gaji_id=<?php echo $data['gaji_id']; ?>
                    & aksi=delete" onclick="return confirm('Apakah Anda 
                    Yakin Mau Menghapus Data Ini?')"><font color="white">Delete</font></a></button> 
    
                        </td>
                    </tr>
                <?php
                }
                ?>
                
            </table>
            
            <button type="button" class="btn btn-primary btn-lg btn-block"><a href="tambah.php"><font color="white">Create</font></a></button><br><br> 
           
</body>

</html>