<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $mail = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM USERS WHERE MAIL = '$mail' and PASS = '$password'";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['user'] = $row;
    if($row['role'] === "admin")
      header("location: ../admin/admin.php?" . session_name() . "=" . session_id());
    else
      header("location: ../home/home.php?" . session_name() . '=' . session_id());
  } 
  else
    $_SESSION['msg'] = "invalid Email or Password";
}