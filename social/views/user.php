<!-- <h1>Welcome to Social</h1> -->
<?php echo "<h1>Welcome " . $_SESSION['username'] . " to Social</h1>"; ?>

<br>
<br>
<a href="<?php echo base_url('main/logout') ?>" >Logout</a>