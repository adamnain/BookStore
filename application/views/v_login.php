			<center>
	<h1>Login User</h1>
	<form action="<?php echo base_url('login/aksi_login_user'); ?>" method="post">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" class="form-control" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" class="form-control" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><button class="btn btn-primary" type="submit">login</button></td>

					<!-- <td><input type="submit" value="Login"></td> -->
				</tr>
			</table>
		</center>
	</form>
</body>
</html>
