<html>

<head>
	<title>Data Karyawan</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>

<body>
	<br>
	<center><b>Isi Data Karyawan</b></center>
	<br>
	<form action="proses.php?aksi=tambah" method="post">
	<div class="form-group row">
		<label  class="col-sm-2 col-form-label"><b>Nama Karyawan</b></label>
		<div class="col-sm-10">
		<input type="text" name="karyawan_nama" class="form-control" placeholder="Masukan Nama..." required> 
		</div>
		</div>
        
		<div class="col-sm-10">
		<button type="submit" class="btn btn-primary" name="simpan">Save</button>

	</form>
</body>

</html>