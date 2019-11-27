<!DOCTYPE html>
	<html>
	<head>
		<title>Data Karyawan</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	</head>
	<body>
			
			<?php
    include '../koneksi.php';
    $karyawan = new Karyawan();
    foreach ($karyawan->edit($_GET['karyawan_id']) as $data){
        $karyawan_id2 = $data['karyawan_id'];
        $karyawan_nama2 = $data['karyawan_nama'];
	}
	?>
	
	
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="padding:20px">
						<div class="card">
							<div class="card-header"><center><b>BIODATA KARYAWAN</b></center></div>
	
							<div class="card-body">
								<form action="index.php" method="post">
									<div class="form-group">
										<label ><b>Nama Karyawan</b></label>
										<input type="text" name="karyawan_nama" class="form-control" value="<?php echo $karyawan_nama2?>">
									</div>
									<div class="form-group">
								<button class="btn btn-primary btn-block">Kembali</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- End Content-->
	
			<!-- footer -->
			<footer>
				<center><b>&copy; Rizky Syaefuloh</b></center>
	
			</footer>
			<!--  End Footer-->
	
			<!-- Js -->
			<script  src="assets/js/jquery-3.4.1.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.js"></script>
	
			<!-- End Js -->
	
	</body>
	</html>