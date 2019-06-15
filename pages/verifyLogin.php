<?php
// Checks if user exists
// if yes then set session values for current user

	// hashes password of a user
	$password = hashPwd($_POST['password']);
	if ($userdata = verifyLogin($_POST['email'], $password))
	{
?>
	<!-- login is successfull -->
	<h1 class="text-center">Welcome, <?=$_SESSION['username']?>!</h1>
<?php
		exit;
	}
?>
	<!-- wrong email or password -->
	<h1 class="text-center"> Wrong email or password</h1>

