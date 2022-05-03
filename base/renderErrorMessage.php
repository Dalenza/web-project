<?php
  if (isset($_SESSION['msg'])) {
    echo "<div class='modal'></div>
    <div class='pop-up'>
    <p style='color: var(--body-bg-color);'>" . $_SESSION['msg'] . "</p>
    <img src='../assets/icons8-close.svg' class='x' onclick='func()'>
    </div>";
    unset($_SESSION['msg']);
  }
