<!DOCTYPE html>
<html>
<head>
	<title>Admin-Tambah Barang</title>
</head>
<body>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<?php echo form_open_multipart('dashboard/tambah_aksi'); ?>
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>stock</td>
				<td><input type="text" name="stock"></td>
			</tr>
			<tr>
				<td>kategori</td>
				<td><input type="text" name="kategori"></td>
			</tr>

			<select class="form-control" name="kategori">
				<?php foreach ($kategori as $row) {?>
					<option value="<?php echo $row->nama_kategori?>"><?php echo $row->nama_kategori?></option>
				<?php }?>
			</select><br>

			<tr>
					<input type="file" name="userfile" />
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	<?php echo form_close() ?>

</body>
</html>
