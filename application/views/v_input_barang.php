
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<?php echo form_open_multipart('dashboard/tambah_aksi'); ?>
		<div class="form-group">
			<label for="nama">Nama:</label>
			<input type="text" class="form-control" name="nama" id="nama">
		</div>
		<div class="form-group">
			<label for="harga">Harga:</label>
			<input type="text" class="form-control" name="harga">
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
			<label for="userfile">Cover Buku</label>
			<input class="btn btn-default" type="file" name="userfile" />
		</div>
		<div class="form-group">
			<input class="btn btn-primary" type="submit" value="Tambah">
		</div>
	<?php echo form_close() ?>

</body>
</html>
