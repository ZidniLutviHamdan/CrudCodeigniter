<!DOCTYPE html>
<html>
<head>
	<title>TAMPIL</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
	
</head>
<style type="text/css">
	table {
    border-spacing: 0;
    border-collapse: collapse;
    width: 90%;   
}
th, td {
    text-align: center;
    padding: 8px;
    border-bottom: 1px solid #ddd;
}
tr:nth-child(even){
	background-color: #B4EA9F
}
th{
	background-color: #1C993F;
	text-align: center;
}
</style>
<body>
	<center><h1>CRUD</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center><br>
	<table align="center">

	<thead>
		<tr>
			<th >No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
	</thead>

		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>

	<tbody>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
	</tbody>
		<?php } ?>
	</table>
</body>
</html>