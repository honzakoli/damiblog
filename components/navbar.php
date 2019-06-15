<nav class="navbar navbar-dark bg-dark navbar-expand-sm sticky-top">
	<div class="container-fluid">
		<!-- navbar -->
		<nav class="navbar navbar-light">
			<!-- navbar brand -->
			<a class="navbar-brand" href="<?=buildUrl("indexTwo")?>">Dami Blog</a>
		</nav>
		<!-- navbar items -->
		<div id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<!-- home page -->
					<a class="nav-link" href="<?=buildUrl("indexTwo")?>">Home</span></a>
				</li>
				<li class="nav-item">
					<!-- registration -->
					<a class="nav-link" href="<?=buildUrl("registration")?>">Registration</a>
				</li>

				<?php
					// If there is active user then user dropdown menu is displayed; othervise Login button is displayed
					if (!isset($_SESSION['username']))
					{
				?>
				<!-- if nobody is logged in -->
				<li class="nav-item">
					<!-- login -->
					<a class="nav-link" href=<?=buildUrl("login")?>>Login</a>
				</li>

				<?php
					}
					else
					{
				?>
				<!-- if there is an active user -->

				<!-- user dropdown menu -->
				<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        				<img class="img-fluid" src="images/user.png">
						<p><?=$_SESSION['username']?></p>
        			</a>
        			<!-- dropdown menu items -->
        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<!-- new post -->
          				<a class="dropdown-item" href=<?=buildUrl("createPost")?>>New Post</a>
          				<!-- logout -->
          				<a class="dropdown-item" href=<?=buildUrl("logout")?>>Logout</a>
      				</div>
      			</li>
      			<?php
      				}
				?>
			</ul>
		</div>
	</div>
</nav>