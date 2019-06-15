<?php
	$username = $_SESSION['username'];
	// date format YYYY-MM-DD
	$date = date("Y-m-d");
	// insert new post data to the database
	$statement = $database->prepare('INSERT INTO post(headline, body, published, author) VALUES (?,?,?,?)');
	$statement->bindValue(1, $_POST['headline']);
	$statement->bindValue(2, $_POST['body']);
	$statement->bindValue(3, $date);
	$statement->bindValue(4, $username);
	$statement->execute();
?>
	<!-- headline -->
	<h1 class="text-center">Post -- <?=$_POST['headline']?> -- sucessfully created!</h1>