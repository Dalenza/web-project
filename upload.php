<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] != 'POST'){
    // echo "Vous n'etes pas autorisé à accéder <br> Veuillez contacter l'administrateur du site.";
    header('location:index/index.php');
  }
  require_once "config.php";
  $filename = $_FILES['file']['name'];
  $category = $_POST['category'];
  $subject = $_POST['subject'];
  $year = $_POST['year'];
  if(!file_exists('resources/'.$filename)){
    $query = "INSERT INTO RESOURCES(FILENAME, CATEGORY, SUBJECT, YEAR) values('$filename', '$category', '$subject', '$year')";
    mysqli_query($conn, $query);
    copy($_FILES['file']['tmp_name'], 'resources/' . $filename);
    $msg = "Document added successfully!<br>Thank you for your contribution :)";
  }
  else
    $msg = "Thanks for your contribution!<br>But this Document already exists in our database.";
  $_SESSION['msg'] = $msg;

  mysqli_close($conn);
  header("location:home/home.php");
?>