<div class="container">
	<div class="registration text-center">
		<h1>Registrace</h1>
		<form action="<?=buildUrl("insertUser")?>" method="POST">
  username:<br>
  <input type="text" name="username"><br>
  email:<br>
  <input type="text" name="email"><br>
  password:<br>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value="Register">
</form>
	</div>
</div>