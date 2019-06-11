<?php

// Checks if user exists
// if yes then set session values for current user
// $password = md5($_POST['password']);


$password = hashPwd($_POST['password']);
if (verifyLogin($_POST['username'], $password)) {
	$_SESSION['username'] = $_POST['username'];
	echo "succesful Login!";
	exit;
}
echo "Wrong password or username";
?>


if ($userObject = verifyUser($_POST['username'])){
	print_r($userObject);
 	if ($userObject['password'] === hashPwd($_POST['password'])){
 	echo "succesful Login!";
 	$_SESSION['username'] = $_POST['username'];
 	exit;
 }
 else
 {
 	echo "Wrong password :-(";
 	exit;
 }
}
echo "user not found";
?>