<html>
<head>
	<title>DAMI BLOG | LOGIN</title>
	<!-- BOOTSTRAP -->
</head>
<body class="text-center">
<div class="container">
<form action="<?=buildUrl("login")?>" method="POST">
  username:<br>
  <input type="text" name="username" placeholder="<?php echo $_POST['username'] ?>"><br>
  password:<br>
  <input type="text" name="password">
  <br><br>
  <input type="submit" value="Login">
</form>
<a href="<?=buildUrl("indexTwo")?>"><button type="button" class="btn btn-dark">return</button></a>
</div>
</body>
</html>