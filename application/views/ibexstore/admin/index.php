<!DOCTYPE html>
<html>
<head>
	<title>Form Login | Selamat Datang Di Ibexstore</title>
</head>
<body>
	<h1>Form Login | Selamat Datang Di Ibexstore</h1>
	<form action="<?php echo base_url(); ?>admin/aksi_login" method="post">		
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