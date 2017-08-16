<!DOCTYPE html>
<html>
<head>
<title>
belajar ci
</title>
</head>
<body>
	<center>
	<h1>crud </h1>
	<h3>form edit data</h3>
	</center>
	<?php foreach($users as $u) { ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="POST">
	<table style=" margin: 20px auto;">
		<tr>
			<td>id</td>
			<td><input type="text" name="id" required="Tidak boleh kosong!" value="<?php echo $u->id ?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="Email" name="email" value="<?php echo $u->email ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="password" value="<?php echo $u->password ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
	</form>
	<?php } ?>
	</body>
	</html>