<div class="container">
<div class="main-page">
<div class="form">

   
    <?php if(isset($_SESSION['success'])) { ?>
      <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
    <?php } ?>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form method="POST" action="" role="form" class="register-form">
       
        <h2>Create account</h2> 
        
        <input id="signupFirstName" type="text" maxlength="50" class="form-control" name="first_name" placeholder="Enter first name">
      
        <input id="signupLastName" type="text" maxlength="50" class="form-control" name="last_name" placeholder="Enter last name">
     
        <input id="signupEmail" type="email" maxlength="50" class="form-control" name="email" placeholder="Enter email">
   
        <input id="signupUsername" type="text" maxlength="50" class="form-control" name="username" placeholder="Enter username">

        <input id="signupPassword" type="password" maxlength="25" class="form-control" placeholder="Enter password (at least 6 characters)" length="40" name="password">
   
        <input id="signupPasswordagain" type="password" maxlength="25" class="form-control" name="re_password" placeholder="Please re-enter password">
     
        <button type="submit" name="register">Create your account</button>
    
        <!-- <p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p> -->
        <hr>
        <?php echo '<p>Already have an account? <a href="'. base_url() .'" </a>Login</p>' ?>
      </form>

</div>
</div>
</div>