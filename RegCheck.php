<?php

session_start();

$id = "";
$pass = "";
$cpass = "";
$name = "";
$type = "";

if (isset($_REQUEST['reg'])) {

	$id = $_REQUEST['id'];
	$pass = $_REQUEST['pass'];
	$cpass = $_REQUEST['cpass'];
	$name = $_REQUEST['name'];
	$type = $_REQUEST['type'];

	if(empty($id) == true || empty($pass) == true || empty($cpass) == true || empty($name) == true || empty($type) == true)
	{
		header('location: Rgistration.php');
	}
	else
	{
		if(!preg_match("/^[a-zA-z ]*$/",$name))
		{
			$name = "";
			header('location: Rgistration.php');
		}
		elseif($pass!=$cpass)
		{
			header('location: Rgistration.php');
		}
		else
		{
			$_SESSION['sId'] = $id;
			$_SESSION['sPass'] = $pass;
			$_SESSION['sCpass'] = $cpass;
			$_SESSION['sName'] = $name;
			$_SESSION['sType'] = $type;

			$myFile = fopen('RegData.txt', 'a');
			fwrite($myFile, $id."|".$pass."|".$cpass."|".$type."|".$name."|");
			fclose($myFile);

			header('location: Login.php');

		}
	}
}
?>