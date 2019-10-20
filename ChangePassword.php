<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="RegCheck.php">
		<fieldset style="width: 0px">
			<LEGEND><b>Change Password</b></LEGEND>
			<table border="0px" width="30%" cellspacing="0px">
				<tr>
					<td>Current Password</td>
				</tr>
				<tr>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>New Password</td>
				</tr>
				<tr>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td>Retype New Password</td>
				</tr>
				<tr>
					<td><input type="password" name="cpass"></td>
				</tr>
				<tr>
					<td><hr></td>
				</tr>
				<tr>
					<td><input type="submit" name="reg" value="Change">&ensp;<a href="">Home</a></td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>