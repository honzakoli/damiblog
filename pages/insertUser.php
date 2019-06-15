<?php

	// username and email duplicity verification
	if (! validateUser($_POST['username'], $_POST['email']))
	{
?>
	<!-- username or email already exist -->
	<h1 class="text-center">Username or email already exist!</h1>
<?php
		exit;
	}
	// successfull registration procedure

	// hash password via md5
	$password = hashPwd($_POST['password']);
	// insert new user data into database
	$statement = $database->prepare('INSERT INTO user(username, email, password) VALUES (?,?,?)');
	$statement->bindValue(1, $_POST['username']);
	$statement->bindValue(2, $_POST['email']);
	$statement->bindValue(3, $password);
	$statement->execute();
?>
	<!-- headline -->
	<h1 class="text-center">Registration complete</h1>