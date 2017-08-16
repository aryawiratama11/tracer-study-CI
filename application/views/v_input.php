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
	<h3>form tambah data</h3>
	</center>

	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="POST">
	<table style=" margin: 20px auto;">
		<tr>
			<td>id</td>
			<td><input type="text" name="id" required="Tidak boleh kosong!"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="Email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="tambah"></td>
		</tr>
	</table>
	</form>
	</body>
	</html>