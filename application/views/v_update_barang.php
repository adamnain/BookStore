<!DOCTYPE html>
<html>
<head>
	<title>Admin - Update</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
		<form action="<?php echo base_url().'dashboard/update'; ?>" method="post" enctype="multipart/form-data">
			<table style="margin:20px auto;">
				<tr>
					<td>Nama</td>
						<input type="text" name="id" value="<?php echo $u->id ?>" hidden>
					<td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $u->harga ?>"></td>
				</tr>
				<tr>
					<td>stock</td>
					<td><input type="text" name="stock" value="<?php echo $u->stock ?>"></td>
				</tr>
				<tr>
					<td>kategori</td>
					<td><input type="text" name="kategori" value="<?php echo $u->kategori ?>"></td>
				</tr>
				<tr>
						<input type="file" name="userfile" value="<?php echo $u->foto ?>" />
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Tambah"></td>
				</tr>
			</table>
		</form>
	<?php } ?>
</body>
</html>
