
<?php
	$id = $_POST['postId'];
	$post = $_POST['postHeadline'];
	$statement = $database->prepare('DELETE FROM post WHERE id = ?');
	$statement->bindValue(1, $id);
	$statement->execute();
?>
<h1 class="text-center">Post -- <?=$post?> -- sucessfully deleted!</h1>