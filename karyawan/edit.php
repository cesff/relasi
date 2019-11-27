<html>

<head>
	<title>Data Karyawan</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

</head>

<body>

	<?php
	include '../koneksi.php';
	$karyawan = new Karyawan();
	foreach ($karyawan->edit($_GET['karyawan_id']) as $data) {
		$karyawan_id2 = $data['karyawan_id'];
		$karyawan_nama2 = $data['karyawan_nama'];
		}
	?>	
	<form action="proses.php?aksi=update" method="post">	
	<div class="container">
	<div class="row">
		<div class="col-md-12" style="padding:20px">
			<div class="card">
		
		<div class="card-header"><center><b>EDIT Karyawan</b></center></div>
		<div class="card-body">
		<input type="hidden" name="karyawan_id" value="<?php echo $karyawan_id2 ?>">

		<div class="form-group">
		<label ><b>Nama </b></label>
		<input type="text" name="karyawan_nama" class="form-control" value="<?php echo $karyawan_nama2?>">
		</div>

		
		


		<div class="form-group">
								<button class="btn btn-primary btn-block" name="simpan">Save</button>
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