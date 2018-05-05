<div class="row">
	<div class="cotainer">
		<center>
			<h1>Login Admin</h1>
		</center>
		<form action="<?php echo base_url('login/aksi_login_admin'); ?>" method="post">
			<center>
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
						<td><input type="submit" class="btn btn-default" value="Login"></td>
					</tr>
				</table>
			</center>
		</form>
	</div>
</div>
</body>
</html>
