<div class="container">
  <div class="registrationPage">
    <!-- heading -->
    <h1 class="text-center">Registration</h1>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <!-- form -->
        <form action="<?=buildUrl("insertUser")?>" method="POST">
          <div class="form-group">
            <!-- input username -->
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <!-- input email -->
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="name@email.com">
          </div>
          <div class="form-group">
            <!-- input password -->
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <!-- submit button -->
          <button type="submit" name="register" class="btn btn-dark">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>

