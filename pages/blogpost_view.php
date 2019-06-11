<?php
	$statement = $database->prepare('SELECT * FROM post WHERE id = ?');
	$statement->bindValue(1,$_GET["id"], PDO::PARAM_INT);
	$result = $statement->execute();
	$row = $result->fetchArray(SQLITE3_ASSOC);
?>
<div class="container">
	<div class="blogpost-full-view">
		<!-- BLOG POST VIEW HEADLINE -->
		<h2><?= $row['headline'] ?></h2>
		<!-- BLOG POST VIEW BODY -->
		<p><?= $row['body'] ?></p>
			<div class="row">
				<div class="col-md-6">
					<!-- BLOG POST VIEW AUTHOR -->
					<p><?= $row['author'] ?></p>
					<!-- BACK BUTTON -->
					<a href="<?=buildUrl("indexTwo")?>"><button type="button" class="btn btn-dark">Back</button></a>
				</div>
				<div class="col-md-6">
					<!-- BLOG POST VIEW DATE PUBLISHED -->
					<p><?=dateFormatter($row['published'])?></p>
				</div>
			</div>
	</div>
</div>
