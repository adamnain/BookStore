<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url().'login/register_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
				<td><input type="text" name="role" value="0"></td>
			</tr>
      <tr>
        <td><input type="submit" value="submit"></td>
      </tr>

		</table>
	</form>
</body>
</html>
