<!DOCTYPE html>
<html>
<head>
	<title>ss</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
</head>
<body>
	<center><a href="<?php echo base_url(). 'index.php/crud/tambah'; ?>">Tambah</a></center>
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($users as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->password ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                  <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>