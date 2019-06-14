<?php
	$statement = $database->prepare('SELECT * FROM post WHERE id = ?');
	$statement->bindValue(1,$_GET["id"], PDO::PARAM_INT);
	$result = $statement->execute();
	$row = $result->fetchArray(SQLITE3_ASSOC);
?>
<div class="container">
	<div class="blogpost-full-view">
		<!-- BLOG POST VIEW HEADLINE -->
		<h2 class="text-center"><?= $row['headline'] ?></h2>
		<!-- author and date -->
		<p class="text-center"><?= $row['author'] ?> | <?=dateFormatter($row['published'])?></p>
		<!-- BLOG POST VIEW BODY -->
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<p><?= $row['body']?></p>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="buttonStyles text-center">
		<a href="<?=buildUrl("indexTwo")?>"><button type="button" class="btn btn-dark">Back</button></a>
		</div>
	</div>
</div>

