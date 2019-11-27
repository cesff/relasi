<html>
<title>Data Karyawan</title>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<body>
    <center>
    <nav class="center navbar-light bg-dark">
  <a class="navbar-brand"><font color="white">Data Karyawan</font</a>
</nav>
<center><br>
            <table class="table table-striped">
            <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Karyawan</th>
      <th scope="col"><center>Aksi</center></th>
        </tr>
                

                <?php
                include '../koneksi.php';
                $karyawan = new Karyawan();
                $no = 1;
                foreach ($karyawan->index() as $data) {
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['karyawan_nama']; ?></td>
                        <td><button type="button" class="btn btn-success"><a href="show.php?karyawan_id=<?php echo $data['karyawan_id']; ?>"><font color="white">Show</font></a></button>
                            <button type="button" class="btn btn-danger"><a href="edit.php?karyawan_id=<?php echo $data['karyawan_id']; ?>"><font color="white">Edit</font></a></button>
                            <button type="button" class="btn btn-warning"><a href="proses.php?karyawan_id=<?php echo $data['karyawan_id']; ?>
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