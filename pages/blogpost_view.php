<?php
	// get data of the post from the database
	$statement = $database->prepare('SELECT * FROM post WHERE id = ?');
	$statement->bindValue(1,$_GET["id"], PDO::PARAM_INT);
	$result = $statement->execute();
	$row = $result->fetchArray(SQLITE3_ASSOC);
?>
<div class="container">
	<div class="blogpost-full-view">
		<!-- headline -->
		<h2 class="text-center"><?= $row['headline'] ?></h2>
		<!-- author and date -->
		<p class="text-center"><?= $row['author'] ?> | <?=dateFormatter($row['published'])?></p>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<!-- post body -->
				<p><?= $row['body']?></p>
			</div>
			<div class="col-md-2"></div>
		</div>
		<!-- prev/next post buttons -->
		<div class="buttonStyles text-center">
		<?php
			if ($row['id'] > 1)
			{
		?>

		<!-- previous post button -->
		<a href="<?=buildUrl('blogpost_view', array('id' => $row['id'] - 1))?>">
			<button type="button" class="btn btn-dark"> Previous post </button>
		</a>
		<?php
			}
		?>
		<?php
			if ($row['id'] < countPost())
			{
		?>
		<!-- next post button -->
		<a href="<?=buildUrl('blogpost_view', array('id' => $row['id'] + 1))?>">
			<button type="button" class="btn btn-dark"> Next post </button>
		</a>
		<?php
			}
		?>
		<br><br><br>
		<!-- home page button -->
		<a href="<?=buildUrl("indexTwo")?>">
			<button type="button" class="btn btn-dark">Home page</button>
		</a>
		</div>
	</div>
</div>