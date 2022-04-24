<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] != 'POST'){
    // echo "Vous n'etes pas autorisé à accéder <br> Veuillez contacter l'administrateur du site.";
    // header('location:index/index.php');
  }
  require_once "config.php";
  $query = "SELECT FILENAME FROM RESOURCES WHERE ID = " . 30;
  $res = mysqli_query($conn, $query);
  $filename = mysqli_fetch_assoc($res);
  $query = "DELETE FROM RESOURCES WHERE ID = " . 30;
  mysqli_query($conn, $query);
  if(unlink('resources/'.$filename['FILENAME']))
    $msg = "Document deleted successfully";
  else
    $msg = "something went wrong";
  $_SESSION['msg'] = $msg;

  mysqli_close($conn);
  header("location: admin/admin.php");
