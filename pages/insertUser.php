<?php

// username and email duplicity verification
	if (verifyUser($_POST['username'])){
		echo "Username or email already exists";
		exit;
	}

// hash password via md5
$password = hashPwd($_POST['password']);
// $password = md5($_POST['password']);
// insert new user data into database
$statement = $database->prepare('INSERT INTO user(username, email, password) VALUES (?,?,?)');
$statement->bindValue(1, $_POST['username']);
$statement->bindValue(2, $_POST['email']);
$statement->bindValue(3, $password);
$statement->execute();
?>

<h1>Registration complete</h1>