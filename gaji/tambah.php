<html>

<head>
	<title>Data Gaji</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>

<body>
	<form action="proses.php?aksi=tambah" method="post">
    <div class="container">
	<div class="row">
		<div class="col-md-12" style="padding:20px">
			<div class="card">

        <div class="card-header"><center><b>ISI DATA KARYAWAN & GAJI</b></center></div>
        <div class="form-group">    
		<label><b>Nama Karyawan</b></label>
		<select name="karyawan_id" class="form-control" >
        <?php
	    include '../koneksi.php';
	    $karyawan = new Karyawan();
	    foreach ($karyawan->index() as $data) {
            ?>
        <option value="<?php echo $data['karyawan_id'];?>"><?php echo $data['karyawan_nama'];}?></option>
        </select></div>
        
        <div class="form-group">
		<label ><b>Gaji Pokok</b></label>
		<input type="text" name="gaji_pokok" class="form-control">
		</div>

		<div class="form-group">
								<button class="btn btn-primary btn-block" name="simpan">Simpan</button>
									</div>
							</div>
							
						</div>
					</div>
				</div>
				<footer>
				<center><b>&copy; Rizky Syaefuloh</b></center>
				</footer>

	</form>
</body>

</html>