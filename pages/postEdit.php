<?php

$statement = $database->prepare('SELECT * FROM post WHERE id = ?');
	$statement->bindValue(1,$_GET["id"], PDO::PARAM_INT);
	$result = $statement->execute();
	$row = $result->fetchArray(SQLITE3_ASSOC);
?>

<!-- edit post form -->

<div class="container">
	<div class="editPost">
		<h1 class="text-center">Edit Post</h1>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<form action="<?=buildUrl("modifyPost")?>" method="POST">
					<div class="form-group">
						<!-- input headline -->
						<label for="Headline">Headline</label>
						<input type="text" class="form-control" name="headline" value="<?=$row['headline']?>">
					</div>
					<div class="form-group">
						<!-- input Body -->
						<label for="Body">Body</label>
						<input type="text" class="form-control" name="body" value="<?=$row['body']?>">
					</div>
					<div class="form-group">
						<input type="hidden" name="id" value="<?=$row['id']?>">
					</div>
				<!-- submit button -->
					<button type="submit" name="saveChanges" class="btn btn-dark">Save Changes</button>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>