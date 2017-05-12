<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');
	$nis		=$_POST['nis'];
	$nama		=$_POST['nama'];
	$kelas		=$_POST['kelas'];
	$jurusan	=$_POST['jurusan'];

	$insert	= mysql_query(
				"INSERT INTO siswa VALUES(
					NULL,
					'$nis',
					'$nama',
					'$kelas',
					'jurusan',
					)"
			);
	if ($insert) {
		echo "Data berhasi; ditambahkan!";
		echo '<a href="index.php">Kembali</a>';
	}else{
		echo "Data gagal ditambahkan!";
		echo '<a href="tambah.php">Kembali</a>';
	}
}
?>