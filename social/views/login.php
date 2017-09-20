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
    <a class="btn register" href="<?php echo base_url("auth/register")?>" role="button">Register</a>
    <!-- <p class="form-group"><a href="#" class="btn btn-info btn-block">Create an account</a></p> -->
  </form>


</div> 
