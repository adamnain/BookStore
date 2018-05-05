
	<center>
		<h3>Contact Us</h3>
	</center>
  <div class="container">
  	<?php echo form_open_multipart('home/tambah_pesan_aksi'); ?>
      <div class="form-group">
        <label for="nama">Nama Anda</label>
        <input type="text" class="form-control" name="nama_user">
      </div>

      <div class="form-group">
  			<label for="isi_pesan">Pesan:</label>
  			<textarea class="form-control" row="10" name="isi_pesan"></textarea>
  		</div>

  		<div class="form-group">
  			<input class="btn btn-primary" type="submit" value="Kirim Pesan">
  		</div>
  	<?php echo form_close() ?>
  </div>

</body>
</html>
