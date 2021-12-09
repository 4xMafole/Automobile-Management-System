<?php
ob_start();
require_once('includes/load.php');
if ($session->isUserLoggedIn(true)) {
  redirect('home.php', false);
}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login-page">
  <div class="text-center">
    <h1><b>IAMS</b></h1>
    <h5>Iyunga Automobile Management System</h5>
  </div>
  <?php echo display_msg($msg); ?>
  <form method="post" action="auth.php" class="clearfix">
    <div class="form-group">
      <label for="username" class="control-label">Username</label>
      <input type="name" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="Password" class="control-label">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group text-right">
      <button type="submit" class="btn btn-primary" style="border-radius:0%">Login</button>
    </div>
  </form>
</div>
<?php include_once('layouts/footer.php'); ?>