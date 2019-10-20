<?php

session_start();

if (isset($_REQUEST['submit'])) {

	$id = $_REQUEST['userid'];
	$pass = $_REQUEST['password'];
	$temp = "";

	if(empty($id) == true || empty($pass) == true)
	{
		header('location: Login.php');
	}
	else
	{
			$myFile = fopen('RegData.txt', 'r');
			$data = fgets($myFile);
			$user = explode("|", $data);
			fclose($myFile);
			for ($i=0; $i < count($user) ; $i=$i+5) { 
				if ($id == $user[$i] && $pass == $user[$i+1]) {
					$temp = TRUE;
					$_SESSION['NAME'] = $user[$i+4];
					$_SESSION['TYPE'] = $user[$i+3];
					break;
				}
				else
					$temp = false;
			}

			if ($temp == TRUE) {

				if ($_SESSION['TYPE'] == "Admin") {
					header('location: AdminDashBoard.php');
				}
				elseif($_SESSION['TYPE'] == "User"){
					header('location: UserDashBoard.php');
				}

			}
			else
				header('location: Login.php');
	}
}
?>