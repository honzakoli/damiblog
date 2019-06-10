<?php

// username and email duplicity verification
$verify = $database->query('SELECT username, email FROM user');
while ($user = $verify->fetchArray(SQLITE3_ASSOC)){
	if ($_POST['username'] == $user['username'] || $_POST['email'] == $user['email']){
		echo "Username or email already exists";
		exit;
	}
}
// hash password via md5
$password = md5($_POST['password']);
// insert new user data into database
$statement = $database->prepare('INSERT INTO user(username, email, password) VALUES (?,?,?)');
$statement->bindValue(1, $_POST['username']);
$statement->bindValue(2, $_POST['email']);
$statement->bindValue(3, $password);
$statement->execute();
?>

<h1>Registration complete</h1>