	<h1>Daftar Pesanan Buku</h1>
	<!-- <div class="link-php" style="width: 100%; margin-bottom: 20px !important;">
		<button class="btn btn-success" style="float: right !important;">
				<?php echo anchor('dashboard/tambah_kategori','Tambah Data'); ?>
		</button>
	</div> -->

	<table class="table table-striped">
		<tr>
			<th>Nama Buku</th>
      <th>Pemesan</th>
			<th>Harga</th>
		</tr>
		<?php foreach($pesanan as $u){ ?>
		<tr>
			<td><?php echo $u->nama_barang ?></td>
      <td><?php echo $u->username ?></td>
			<td><?php echo $u->harga ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
