<?php
	// current date formatted into YYYY-MM-DD
	$date = date("Y-m-d");
	// replace post data in the database
	$statement = $database->prepare('REPLACE INTO post(id, headline, body, author, published) VALUES (?,?,?,?,?)');
	$statement->bindValue(1, $_POST['id']);
	$statement->bindValue(2, $_POST['headline']);
	$statement->bindValue(3, $_POST['body']);
	$statement->bindValue(4, $_SESSION['username']);
	$statement->bindValue(5, $date);

	$statement->execute();
?>
<!-- headline -->
<h1 class="text-center">Post -- <?=$_POST['headline']?> -- sucessfully modified!</h1>