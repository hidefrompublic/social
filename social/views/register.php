<div class="container">
<div class="row">
  <div class="panel panel-primary">
    <div class="panel-body">
    <?php if(isset($_SESSION['success'])) { ?>
      <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
    <?php } ?>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form method="POST" action="" role="form">
        <div class="form-group">
          <h2>Create account</h2>
        </div>
        <div class="form-group">
          <label class="control-label" for="signupName">First Name</label>
          <input id="signupFirstName" type="text" maxlength="50" class="form-control" name="first_name">
        </div>
        <div class="form-group">
          <label class="control-label" for="signupName">Last Name</label>
          <input id="signupLastName" type="text" maxlength="50" class="form-control" name="last_name">
        </div>
        <div class="form-group">
          <label class="control-label" for="signupEmail">Email</label>
          <input id="signupEmail" type="email" maxlength="50" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label class="control-label" for="signupUsername">Username</label>
          <input id="signupUsername" type="text" maxlength="50" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label class="control-label" for="signupPassword">Password</label>
          <input id="signupPassword" type="password" maxlength="25" class="form-control" placeholder="at least 6 characters" length="40" name="password">
        </div>
        <div class="form-group">
          <label class="control-label" for="signupPasswordagain">Password again</label>
          <input id="signupPasswordagain" type="password" maxlength="25" class="form-control" name="re_password">
        </div>
        <div class="form-group">
          <button id="signupSubmit" type="submit" class="btn btn-info btn-block" name="register">Create your account</button>
        </div>
        <!-- <p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p> -->
        <hr>
        <?php echo '<p>Already have an account? <a href="'. base_url() .'" </a>Log in</p>' ?>
      </form>
    </div>
  </div>
</div>
</div>