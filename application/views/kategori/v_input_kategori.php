
	<center>
		<h3>Tambah Kategori baru</h3>
	</center>
	<?php echo form_open_multipart('dashboard/tambah_kategori_aksi'); ?>
		<div class="form-group">
			<label for="nama">Nama Kategori:</label>
			<input type="text" class="form-control" name="nama_kategori" id="nama_kategori">
		</div>

		<div class="form-group">
			<input class="btn btn-primary" type="submit" value="Tambah">
		</div>
	<?php echo form_close() ?>

</body>
</html>
