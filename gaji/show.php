<!DOCTYPE html>
	<html>
	<head>
		<title>Data Gaji</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	</head>
	<body>
			
			<?php
    include '../koneksi.php';
    $gaji = new Gaji();
    foreach ($gaji->edit($_GET['gaji_id']) as $data){
        $gaji_id2 = $data['gaji_id'];
        $karyawan_nama2 = $data['karyawan_nama'];
        $gaji_pokok2 = $data['gaji_pokok'];
	}
	?>
    <div class="container">
				<div class="row">
					<div class="col-md-12" style="padding:20px">
						<div class="card">
							<div class="card-header"><center><b>DATA KARYAWAN & GAJI</b></center></div>
	
							<div class="card-body">
								<form action="index.php" method="post">
									<div class="form-group">
										<label ><b>Nama Karyawan</b></label>
										<input type="text" name="karyawan_id" class="form-control" value="<?php echo $karyawan_nama2?>">
									</div>
                                    <div class="form-group">
										<label ><b>Gaji</b></label>
										<input type="text" name="gaji_pokok" class="form-control" value="<?php echo $gaji_pokok2?>">
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