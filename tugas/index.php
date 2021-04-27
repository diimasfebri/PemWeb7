<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<!-- menampilkan text Login yang besar -->
	<h2 align="center">Login	</h2>
	<!-- membuat form dengan method post, yang akan dikirimkan ke file ceklogin-->
	<form method="post" action="ceklogin.php">
		<!-- tabell inputan login -->
		<table align="center">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><button type="submit" name="Login">Login</button></td>
		</tr>
		</table>
	</form>
	
</body>
</html>