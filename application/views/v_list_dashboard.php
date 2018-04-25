<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Dashboard</h1>
	<center>
		<?php echo anchor('belajar/tambah','Tambah Data'); ?>
		<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
		<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
	</center>
	<table border="1">
		<?php foreach($barang as $u){ ?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->harga ?></td>
			<td><?php echo $u->stock ?></td>
			<td><?php echo $u->kategori ?></td>
			<td>
				<img src="<?php echo base_url ('assets/images/'.$u->foto);?>" />
			</td>
      <td>
        <?php echo anchor('dashboard/edit/'.$u->id,'Edit'); ?>
        <?php echo anchor('dashboard/hapus/'.$u->id,'Hapus'); ?>
      </td>

		</tr>
		<?php } ?>
	</table>
</body>
</html>
