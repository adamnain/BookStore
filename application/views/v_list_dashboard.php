<!-- <!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body> -->
	<h1>List Buku</h1>
	<div class="link-php" style="width: 100%; margin-bottom: 20px !important;">
		<button class="btn btn-success" style="float: right !important;">
				<?php echo anchor('dashboard/tambah','Tambah Data'); ?>
		</button>
	</div>

	<table class="table table-striped">
		<tr>
			<th>Judul Buku</th>
			<th>Harga</th>
			<th>Kategori Buku</td>
			<th>Cover</th>
			<th>Edit</th>

		</tr>
		<?php foreach($barang as $u){ ?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->harga ?></td>
			<!-- <td><?php echo $u->stock ?></td> -->
			<td><?php echo $u->kategori ?></td>
			<td>
				<img src="<?php echo base_url ('assets/images/'.$u->foto);?>" class="cover-buku" />
			</td>
      <td>
        <button class="btn btn-warning"><?php echo anchor('dashboard/edit/'.$u->id,'Edit'); ?></button>
				<button class="btn btn-danger"><?php echo anchor('dashboard/hapus/'.$u->id,'Hapus'); ?></button>
      </td>

		</tr>
		<?php } ?>
	</table>
</body>
</html>
