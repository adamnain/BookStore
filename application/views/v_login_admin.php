
<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body>
	<h1>Login Admin</h1>
	<form action="<?php echo base_url('login/aksi_login_admin'); ?>" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
