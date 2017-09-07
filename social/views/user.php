<!-- <h1>Welcome to Social</h1> -->
<?php echo "<h1>Welcome " . $_SESSION['username'] . " to Social</h1>"; ?>

<?php if(isset($_SESSION['success'])) { ?>
  <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
<?php } ?>


<br>
<br>
<a href="<?php echo base_url('auth/login') ?>" >Logout</a>