<?php
session_start();
if (isset($_SESSION['user'])){
  if($_SESSION['user']['role'] == "admin")
    header("location: ../admin/admin.php");
  else
    header('location: ../home/home.php');
  die();
}
require_once "../base/config.php";
require_once "connexion.php";
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../base.css">
  <link rel="stylesheet" href="index.css">
  <title>Study Resources</title>
  <script>
    function func() {
      document.getElementsByClassName("pop-up")[0].style.display = 'none';
      document.getElementsByClassName("modal")[0].style.display = 'none';
    }
  </script>
</head>

<body>
  <?php require_once "../base/renderErrorMessage.php"; ?>
  <div class="container">
    <form class="left" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <div class="left__header">
        <h1>Welcome back</h1>
        <p>welcome back! please enter your details</p>
      </div>
      <div class="left__body">
        <div class="form-control">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-control">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" required>
        </div>
        <input class="btn btn--log-in" type="submit" value="Sign in">
        <p>don't have an account? <a class="link" href="../sign-up/sign-up.php">Sign up</a></p>
      </div>
    </form>
    <div class="right">
      <img src="../assets/undraw_social_sharing_re_pvmr.svg" alt="">
    </div>
  </div>
  <script src="index.js"></script>
</body>

</html>