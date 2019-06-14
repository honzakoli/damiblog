<?php
// Checks if user exists
// if yes then set session values for current user
	$password = hashPwd($_POST['password']);
	if ($userdata = verifyLogin($_POST['email'], $password))
	{
		$_SESSION['username'] = $userdata['username'];

	?>
		<h1 class="text-center">Welcome, <?=$userdata['username']?>!</h1>
	<?php
		exit;
	}
?>
		<h1 class="text-center"> Wrong email or password</h1>