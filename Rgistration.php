<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="RegCheck.php">
		<fieldset style="width: 0px">
			<LEGEND><b>Registration</b></LEGEND>
			<table border="0px" width="30%" cellspacing="0px">
				<tr>
					<td>Id</td>
				</tr>
				<tr>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Password</td>
				</tr>
				<tr>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
				</tr>
				<tr>
					<td><input type="password" name="cpass"></td>
				</tr>
				<tr>
					<td>Name</td>
				</tr>
				<tr>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>User Type</td>
				</tr>
				<tr>
					<td><hr></td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="type" value="User">User &emsp;
						<input type="radio" name="type" value="Admin">Admin
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="reg" value="Signup">&ensp;<a href="Login.php">SignIn</a></td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>