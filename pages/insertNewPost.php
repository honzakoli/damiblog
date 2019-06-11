<?php
$username = $_SESSION['username'];
$date = date("Y-m-d");
$statement = $database->prepare('INSERT INTO post(headline, body, published, author) VALUES (?,?,?,?)');
$statement->bindValue(1, $_POST['headline']);
$statement->bindValue(2, $_POST['body']);
$statement->bindValue(3, $date);
$statement->bindValue(4, $username);
$statement->execute();
?>

<h1 class="text-center">Post -- <?=$_POST['headline']?> -- sucessfully created!</h1>