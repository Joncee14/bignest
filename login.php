<!-- login.php  -->
<?php include 'server.php' ?>

<?php


if (isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You are logged in";
  header('location: index.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Yummy - Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicons -->
  <link href="assets/img/hero.png" rel="icon">
  <!-- MATERIAL DESIGN ICONIC FONT -->
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

  <!-- STYLE CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
    <div class="inner">
      <form method="post" action="login.php">
        <h3>Login Form</h3>
        <?php include('errors.php'); ?>
        <div class="form-wrapper">
          <label for="">Username</label>
          <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="form-wrapper">
          <label for="">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="form-wrapper">
        <button type="submit" class="login-btn" name="login_user">Login</button>
        </div>
        <p>
        Not yet a member? <a href="register.php">Sign up</a>
        </p>
      </form>
    </div>
  </div>

</body>

</html>


