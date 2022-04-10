<?php
  require_once "control.php";
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pw'];
    $query = "SELECT * FROM USERS WHERE FNAME = '$fname' AND LNAME = '$lname' or MAIL = '$email'";
    if(mysqli_num_rows(mysqli_query($conn, $query)) > 0)
      $res = "Utilisateur deja Existant ou Email deja utilisé";
    else{
      $query = "INSERT INTO USERS(FNAME, LNAME, MAIL, PASS) values('$fname', '$lname', '$email', '$password')";
      if(mysqli_query($conn, $query))
        $res = "utilisateur ajouté avec succés";
      else
        $res = "something went wrong";
    }
  }
  mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="base.css">
  <link rel="stylesheet" href="sign-up.css">
  <script>
        function func(){
            document.getElementsByClassName("pop-up")[0].style.display = 'none';
            document.getElementsByClassName("modal")[0].style.display = 'none';
        }
    </script>
</head>

<body>
    <?php
      if(isset($res)){
          echo "<div class='modal'></div>";
          echo "<div class='pop-up'>";
          echo "<p>$res</p>";
          echo "<img src='assets\x-button-327024.png' class='x' onclick='func()'>";
          echo "</div>";
      }
    ?>
  <form class="container" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <h1>Sign up with your email</h1>
    <div class="form-control">
      <label for="fname">First Name:</label>
      <input type="text" name="fname" id="fname" required>
    </div>
    <div class="form-control">
      <label for="lname">Last Name:</label>
      <input type="text" name="lname" id="lname" required>
    </div>
    <div class="form-control">
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email" required>
    </div>
    <div class="form-control">
      <label for="pw">Password:</label>
      <input type="password" name="pw" id="pw" required>
    </div>
    <p>already have an account? <a href="index.php">Sign in</a></p>
    <input class="btn btn--sign-up" type="submit" value="Create Account">
  </form>
</body>

</html>