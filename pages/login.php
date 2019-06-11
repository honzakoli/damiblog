<!-- login form -->
<div class="container">
	<div class="loginPage">
	<!-- heading -->
	<h1 class="text-center">Login</h1>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- form -->
			<form action="<?=buildUrl("verifyLogin")?>" method="POST">
				<div class="form-group">
					<!-- input username -->
					<label for="username">Username</label>
					<input type="text" class="form-control" name="username" placeholder="Username">
				</div>
				<div class="form-group">
					<!-- input password -->
					<label for="Password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
				<!-- submit button -->
				<button type="submit" name="login" class="btn btn-dark">Login</button>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</div>