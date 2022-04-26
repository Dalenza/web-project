<?php
  if (isset($_SESSION['msg'])) {
    echo "<div class='modal'></div>
    <div class='pop-up'>
    <p style='color: #000;'>" . $_SESSION['msg'] . "</p>
    <img src='../assets/x-button-327024.png' class='x' onclick='func()'>
    </div>";
    unset($_SESSION['msg']);
  }
