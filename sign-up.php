<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="sign-up.css">
</head>
<body>
  <form action="" method="POST">
    <h2>Sign up with your email</h2>
    <div>
      <label for="fname">First Name:</label>
    <input type="text" name="fname" id="fname" required>
    </div>
    <div>
      <label for="lname">Last Name:</label>
    <input type="text" name="lname" id="lname" required>
    </div>
    <div>
      <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>
    </div>
    <div>
      <label for="pw">Password:</label>
    <input type="password" name="pw" id="pw" required>
    </div>
    <p>already have an account? <a href="index.php">Sign in</a></p>
    <input type="submit" value="Create Account">
  </form>
</body>
</html>