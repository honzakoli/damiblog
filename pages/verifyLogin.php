<?php
// Checks if user exists
// if yes then set session values for current user
	$password = hashPwd($_POST['password']);
	if (verifyLogin($_POST['username'], $password))
	{
		$_SESSION['username'] = $_POST['username'];
		echo "succesful Login!";
		exit;
	}
	echo "Wrong password or username";
?>