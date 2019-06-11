<div class="container">
	<div class="createPostPage">
		<!-- heading -->
		<h1 class="text-center">New Post</h1>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<form action="<?=buildUrl("insertNewPost")?>" method="POST">
					<div class="form-group">
						<!-- input headline -->
						<label for="Headline">Headline</label>
						<input type="text" class="form-control" name="headline" placeholder="Headline">
					</div>
					<div class="form-group">
						<!-- input Body -->
						<label for="Body">Body</label>
						<textarea type="text" class="form-control" name="body" placeholder="Body" rows="10"></textarea>
					</div>
				<!-- submit button -->
					<button type="submit" name="createPost" class="btn btn-dark">Create Post</button>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>