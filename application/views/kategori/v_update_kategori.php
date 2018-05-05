
	<center>
		<h3>Edit Kategori</h3>
	</center>
	<?php echo form_open_multipart('dashboard/edit_kategori_aksi'); ?>
		<?php foreach($kategori as $u){ ?>
			<div class="form-group">
				<label for="nama">Nama Kategori:</label>
				<input type="text" class="form-control" name="id" id="id" value="<?php echo $u->id ?>" hidden>
				<input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="<?php echo $u->nama_kategori ?>">
			</div>

			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Update">
			</div>
		<?php } ?>
	<?php echo form_close() ?>

</body>
</html>
