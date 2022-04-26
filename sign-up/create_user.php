<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pw'];
    $query = "SELECT * FROM USERS WHERE MAIL = '$email'";
    if (mysqli_num_rows(mysqli_query($conn, $query)) > 0)
      $_SESSION['msg'] = "Utilisateur deja Existant ou Email deja utilisé";
    else {
      $query = "INSERT INTO USERS(FNAME, LNAME, MAIL, PASS, ROLE) values('$fname', '$lname', '$email', '$password', 'user')";
      if (mysqli_query($conn, $query))
        $_SESSION['msg'] = "utilisateur ajouté avec succés";
      else
        $_SESSION['msg'] = "something went wrong";
    }
  }
  else{
    header('location: ../index/index.php');
  }