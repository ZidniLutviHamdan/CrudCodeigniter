<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">
</head>
<body>
<div id="kotak">
		<div id="atas">
		Edit Data
		</div>
		<div id="bawah">

	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
	
		
			<label>Nama</label>
				<input type="hidden" name="id" value="<?php echo $u->id ?>">
				<input type="text" class="masuk" name="nama" value="<?php echo $u->nama ?>">		
			<label>Alamat</label>
				<input type="text" class="masuk" name="alamat" value="<?php echo $u->alamat ?>">
			<label>Pekerjaan</label>
				<input type="text" class="masuk" name="pekerjaan" value="<?php echo $u->nama ?>">
				<br>
				<input type="submit" id="tombol" value="Simpan">
	</form>	
	<?php } ?>
	</div>
	</div>
</body>
</html>