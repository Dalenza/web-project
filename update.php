<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo "Vous n'etes pas autorisé à accéder <br> Veuillez contacter l'administrateur du site.";
    header('location:index/index.php');
  }
  require_once "config.php";
  $id = $_POST['id'];
  $newname = $_POST['filename'];
  $category = $_POST['category'];
  $subject = $_POST['subject'];
  $year = $_POST['year'];

  $query = "SELECT FILENAME FROM RESOURCES WHERE ID = " . $id;
  $res = mysqli_query($conn, $query);
  $oldname = mysqli_fetch_assoc($res);
  $query = "UPDATE RESOURCES SET filename = '" . $newname . "' , category = '" . $category ."', subject = '" . $subject  . "', year = '" . $year . "' WHERE ID = " . $id;
  if(mysqli_query($conn, $query) and rename('resources/' . $oldname['FILENAME'], 'resources/' . $newname))
    $msg = "Document updated successfully";
  else
    $msg = "something went wrong";
  $_SESSION['msg'] = $msg;
  mysqli_close($conn);
  header("location: admin/admin.php");
