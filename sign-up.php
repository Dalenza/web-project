<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="base.css">
  <link rel="stylesheet" href="sign-up.css">
</head>

<body>
  <form class="container" action="sign-up.php" method="POST">
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
<<<<<<< HEAD:sign-up.php
    <p>already have an account? <a href="index.php">Sign in</a></p>
    <input type="submit" value="Create Account">
=======
    <p>already have an account? <a href="index.html">Sign in</a></p>
    <input class="btn btn--sign-up" type="submit" value="Create Account">
>>>>>>> fff53a0b6c20e9c9f776635c2c86de2a1f6fc62e:sign-up.html
  </form>
</body>

</html>