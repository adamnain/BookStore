<!DOCTYPE html>
<html>
<head>
	<title>Admin - Update</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($barang as $u){ ?>
		<form action="<?php echo base_url().'dashboard/update'; ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label >Nama:</label>
				<input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>">
				<input type="text" name="id" value="<?php echo $u->id ?>" hidden>
			</div>
			<div class="form-group">
				<label >Harga:</label>
				<input type="text" class="form-control" name="harga" value="<?php echo $u->harga ?>">
			</div>
			<div class="form-group">
				<label for="kategori">Kategori:</label>
				<select class="form-control" name="kategori">
					<?php foreach ($kategori as $row) {?>
						<option value="<?php echo $row->nama_kategori?>"><?php echo $row->nama_kategori?></option>
					<?php }?>
				</select>
			</div>

			<div class="form-group">
				<label >Cover Buku:</label>
				<input type="file" name="userfile" value="<?php echo $u->foto ?>" />
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Tambah">
			</div>


		</form>
	<?php } ?>
</body>
</html>
