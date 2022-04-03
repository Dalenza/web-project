<?php
  session_start();
  echo "hello " . $_SESSION['fname'] . ' ' . $_SESSION['lname'];
?>