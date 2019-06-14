
<?php
	$id = $_GET['id'];
	$statement = $database->prepare('DELETE FROM post WHERE id = ?');
	$statement->bindValue(1, $id);
	$result = $statement->execute();
	$row = $result->fetchArray(SQLITE3_ASSOC);
?>
<h1 class="text-center">Post -- <?=$row['id']?> -- sucessfully deleted!</h1>