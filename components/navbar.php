<nav class="navbar navbar-dark bg-dark navbar-expand-sm sticky-top">
	<div class="container-fluid">
		<nav class="navbar navbar-light">
			<a class="navbar-brand" href="<?=buildUrl("indexTwo")?>">Dami Blog</a>


		</nav>
		<div id="navbarNavDropdown">
		<ul class="navbar-nav">

			<li class="nav-item">
				<a class="nav-link" href="<?=buildUrl("indexTwo")?>">Home</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?=buildUrl("registration")?>">Registration</a>
			</li>
			<?php
				if (!$_SESSION['username']){
			echo '<li class="nav-item">
				<a class="nav-link" href="'.buildUrl("login").'">Login</a>
			</li>';}
			else {
			echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        	<img class="img-fluid" src="images/user.png">
			<p>'.$_SESSION['username'].'</p>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="'.buildUrl("createPost").'">New Post</a>
          <a class="dropdown-item" href="'.buildUrl("logout").'">Logout</a>
      </li>';
      		}
			?>
		</ul>
	</div>
	</div>
</nav>