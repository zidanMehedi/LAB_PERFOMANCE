<?php

session_start();

?>





<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<center>
		<fieldset style="width: 0px">
			<h1>WELCOME <?= $_SESSION['NAME']?></h1>
			<table border="0px" align="center" width="500px">
				<tr>
					<td align="center"><a href="Profile.php">Profile</a></td>
				</tr>
				<tr>
					<td align="center"><a href="ChangePassword.php">Change Password</a></td>
				</tr>
				<tr >
					<td align="center"><a href="UserProfile.php">View Users</a></td>
				</tr>
				<tr>
					<td align="center"><a href="Login.php">Logout</a></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</center>
</body>
</html>