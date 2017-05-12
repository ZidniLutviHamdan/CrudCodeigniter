<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">
	
</head>
<body>
	<div id="kotak">
		<div id="atas">
		Tambah Data
		</div>
	<div id="bawah">
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		
		<label>Nama</label>
				<input type="text" class="masuk" name="nama">

		<label>Alamat</label>
				<input type="text" class="masuk" name="alamat">
		<label>Pekerjaan</label>
				<input type="text" class="masuk" name="pekerjaan">
				<br>
				<input type="submit" id="tombol" value="Tambah Data">
	</form>	
	</div>
	</div>
</body>
</html>