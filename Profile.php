<?php
session_start();
error_reporting(0);

$myFile = fopen('RegData.txt', 'r');
$data = fgets($myFile);
$user = explode("|", $data);

for ($i=0; $i < count($user); $i=$i+5) { 
	if ($_SESSION['NAME'] == $user[$i+4]) {
		$_SESSION['ID'] = $user[$i];
		$_SESSION['TYPE'] = $user[$i+3];
		$temp = true;
	}


}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<center>
		<table  border="1px" width="200px" cellspacing="0px" cellpadding="5px">
				<tr>
					<th colspan="2px" align="center" >Profile</th>
				</tr>
				<tr>
					<td>ID</td>
					<td><?= $_SESSION['ID']?></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><?= $_SESSION['NAME']?></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td><?= $_SESSION['TYPE']?></td>
				</tr>
				<tr>
					<td colspan="2px" align="right"><a href="AdminDashBoard.php">Go Home</a></td>
				</tr>
			</table>
	</center>

</body>
</html>