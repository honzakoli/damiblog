<?php
$headline = $_POST['postHeadline'];
$body = $_POST['postBody'];
$id = $_POST['postId'];

// get current post data from database
$statement = $database->prepare('SELECT * FROM post WHERE id = ?');
$statement->bindValue(1, $id);
$statement->execute();


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
						<input type="text" class="form-control" name="headline" value="<?=$headline?>">
					</div>
					<div class="form-group">
						<!-- input Body -->
						<label for="Body">Body</label>
						<input type="text" class="form-control" name="body" value="<?=$body?>">
					</div>
					<div class="form-group">
						<input type="hidden" name="id" value="<?=$id?>">
					</div>
				<!-- submit button -->
					<button type="submit" name="createPost" class="btn btn-dark">Create Post</button>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>