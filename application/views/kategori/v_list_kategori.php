	<h1>Data Kategori</h1>
	<div class="link-php" style="width: 100%; margin-bottom: 20px !important;">
		<button class="btn btn-success" style="float: right !important;">
				<?php echo anchor('dashboard/tambah_kategori','Tambah Data'); ?>
		</button>
	</div>

	<table class="table table-striped">
		<tr>
			<th>Kategori</th>
      <th>Edit</th>

		</tr>
		<?php foreach($kategori as $u){ ?>
		<tr>
			<td><?php echo $u->nama_kategori ?></td>
      <td>
        <button class="btn btn-warning"><?php echo anchor('dashboard/edit_kategori/'.$u->id,'Edit'); ?></button>
				<button class="btn btn-danger"><?php echo anchor('dashboard/hapus_kategori/'.$u->id,'Hapus'); ?></button>
      </td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
