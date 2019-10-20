<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="LoginCheck.php">
		<fieldset style="width: 0px">
			<LEGEND><b>LOGIN</b></LEGEND>
			<table border="0px" width="30%" cellspacing="0px">
				<tr>
					<td>User ID</td>
				</tr>
				<tr>
					<td><input type="text" name="userid"></td>
				</tr>
				<tr>
					<td>Password</td>
				</tr>
				<tr>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><hr></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Login">&ensp;<a href="Rgistration.php">Signup</a></td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>