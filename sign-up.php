<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="base.css">
  <link rel="stylesheet" href="sign-up.css">
  <title>Sign Up</title>
</head>

<body>
  <form class="container" action="#" method="POST">
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
    <p>already have an account? <a class="link" href="index.php">Sign in</a></p>
    <input class="btn btn--sign-up" type="submit" value="Create Account">
  </form>
</body>

</html>