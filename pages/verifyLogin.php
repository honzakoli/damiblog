<?php
// Checks if user exists
// if yes then set session values for current user
	$password = hashPwd($_POST['password']);
	if ($userdata = verifyLogin($_POST['email'], $password))
	{
		$_SESSION['username'] = $userdata['username'];
		echo "Welcome, " .$userdata['username'] ."!";
		exit;
	}
	echo "Wrong password or username";
?>