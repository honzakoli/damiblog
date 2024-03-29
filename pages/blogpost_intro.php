<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<!-- blog post intro content -->
			<div class="blogpost-intro-frame">
				<div class="row">
					<!-- picture -->
					<div class="col-md-6">
						<img class="img-fluid" src="../images/1.png" alt="proste obrazek">
					</div>
					<!-- headline, post intro, author, date -->
					<div class="col-md-6">
						<!-- headline -->
						<h2 class="text-center"><?= $row['headline'] ?></h2>
						<div class="row">
							<!-- author -->
							<div class="col-md-4">
								<p class="text-right"><?= $row['author'] ?></p>
							</div>
							<!-- date -->
							<div class="col-md-4">
								<p class="text-left"><?= dateFormatter($row['published']) ?></p>
							</div>
							<?php
								if (isset($_SESSION['username']))
								// if there is an active user then add buttons for edit and delete the post
								{
								?>
									<!-- edit -->
								<div class="col">
									<a href="<?=buildUrl("postEdit", array('id' => $row['id']))?>">
										<img class="img-fluid" src="../images/svg/pencil.svg" alt="edit">
									</a>
								</div>
								<!-- delete -->
								<div class="col">
									<a href="<?=buildUrl("deletePost", array('id' => $row['id']))?>">
										<img class="img-fluid" src="../images/svg/trash.svg" alt="edit">
									</a>
								</div>
						<?php
						}
						?>
						</div>
						<!-- post intro -->
						<p><?= postIntro($row['body'])?></p>
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4"></div>
							<!-- read more button -->
							<div class="col-md-4">
								<a href="<?=buildUrl('blogpost_view', array('id' => $row['id']))?>"><button type="button" class="btn btn-dark">Read more</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>