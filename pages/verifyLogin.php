<?php

// Checks if user exists
// if yes then set session values for current user
// $password = md5($_POST['password']);
$password = hashPwd($_POST['password']);
if ((verifyLogin($_POST['username'], $password)) === 1){
	$_SESSION['username'] = $_POST['username'];
	echo "succesful Login!";
	exit;
}
echo "Wrong password or username";
?>

