<?php
    include '../koneksi.php';
    $gaji = new Gaji();
    $karyawan = new Karyawan();
    foreach ($gaji->edit($_GET['gaji_id']) as $data) {
    $gaji_id2 = $data['gaji_id'];
    $karyawan_id2 = $data['karyawan_id'];
    $gaji_pokok2 = $data['gaji_pokok'];
    $karyawan_nama2 = $data['karyawan_nama'];
    }
    ?>

<html>

<head>
	<title>Data Gaji</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>

<body>
	
	<form action="proses.php?aksi=update" method="post">
    <div class="container">
	<div class="row">
		<div class="col-md-12" style="padding:20px">
			<div class="card">

        <div class="card-header"><center><b>EDIT DATA KARYAWAN & GAJI</b></center></div>
        <div class="card-body">
		<input type="hidden" name="gaji_id" value="<?php echo $gaji_id2 ?>">
        <div class="form-group">    
		<label><b>Nama Karyawan</b></label>
		<select name="karyawan_id" class="form-control" selected>
        <?php foreach ($karyawan->index() as $xx) {?>
        <option value="<?php echo $xx['karyawan_id']?>"
        <?php if($xx['karyawan_id'] == $karyawan_id2) echo "selected"; ?>><?php echo $xx['karyawan_nama'];}?></option>
        </select></div>
        
        <div class="form-group">
		<label ><b>Gaji Pokok</b></label>
		<input type="text" name="gaji_pokok" class="form-control" value="<?php echo $gaji_pokok2 ?>" >
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