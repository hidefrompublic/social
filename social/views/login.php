<div class="container">
  <div class="main-page">
    <div class="form">
        <?php if(isset($_SESSION['success'])) { ?>
          <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php } ?>
 
        <form method="POST" action="" class="login-form">
          <h2 class="form-signin-heading">Social</h2>

          <label class="sr-only">Username</label>
          <input type="text" id="inputUsername" class="form-control" placeholder="Enter Username" name="username" required autofocus>
          <!-- <span class="alert alert-danger"><?php //echo form_error('username'); ?></span> -->

          <label class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password" name="password" required>
          <!-- <span class="alert alert-danger"><?php //echo form_error('password'); ?></span> -->

          <button type="submit" name="login" id="login">Login</button>
          <p class="message"><a href="<?php echo base_url("main/register")?>">Create an account</a></p>

        </form>
    </div>
  </div>
</div> 
