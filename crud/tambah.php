<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>

	<p><a href="index.php">Beranda</a> /<a href="tambah.php">Tambah Data</a></p>

	<h3>Tambah Data Siswa</h3>

	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
			<td><input type="text" name="nama" size="30" require></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pilih Kelas</option>
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="">Pilih Jurusan</option>
						<option value="Jurusan A">Jurusan A</option>
						<option value="Jurusan B">Jurusan B</option>
						<option value="Jurusan C">Jurusan C</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
	</body>
</html>