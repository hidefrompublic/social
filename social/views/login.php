<div class="container">

  <?php if(isset($_SESSION['success'])) { ?>
    <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
  <?php } ?>
  <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
  <form method="POST" action="" class="form-signin">
    <h2 class="form-signin-heading">Social</h2>
    <label class="sr-only">Username</label>
    <input type="text" id="inputUsername" class="form-control" placeholder="Enter Username" name="username" required autofocus>
    <label class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password" name="password" required>
    <button class="btn btn-danger login" type="submit" name="login">Log in</button>
    <a class="btn btn-info register" href="<?php echo base_url("auth/register")?>" role="button">Register</a>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <!-- <p class="form-group"><a href="#" class="btn btn-info btn-block">Create an account</a></p> -->
  </form>

</div> 


<!-- <h2>Login Form</h2>

<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form> -->