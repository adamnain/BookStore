<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<center>
		<h3>Register User</h3>
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
				<td><input type="text" name="role" value="0" hidden></td>
			</tr>
      <tr>
        <td><input type="submit" value="submit"></td>
      </tr>

		</table>
	</form>
</body>
</html>
