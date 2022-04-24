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
  
  $query = "SELECT filename from RESOURCES";
  $names = mysqli_fetch_all(mysqli_query($conn, $query));
  
  for($i=0;$i<count($names);$i++){
    if($names[$i][0] == $newname and $newname != $oldname['FILENAME']){
      $msg = "Sorry, but this name is already used, try another one";
      $_SESSION['msg'] = $msg;
      header("location: admin/admin.php");
      die();
    }
  }
  $query = "UPDATE RESOURCES SET filename = '" . $newname . "' , category = '" . $category ."', subject = '" . $subject  . "', year = '" . $year . "' WHERE ID = " . $id;
  if(mysqli_query($conn, $query) and rename('resources/' . $oldname['FILENAME'], 'resources/' . $newname))
    $msg = "Document updated successfully";
  else
    $msg = "something went wrong";
  $_SESSION['msg'] = $msg;
  mysqli_close($conn);
  header("location: admin/admin.php");
