<?php
session_start();
if (!isset($_SESSION['user'])) {
  // echo "Vous n'etes pas autorisé à accéder <br> Veuillez contacter l'administrateur du site.";
  header('location:../index/index.php');
  die();
}
if($_SESSION['user']['role'] === 'admin')
  $link = "../admin/admin.php";
else
  $link = "../home/home.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="../base.css" />
  <link rel="stylesheet" href="about.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Study resources</title>
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="logo">
        <a id="img" href="<?php echo $link; ?>"></a>
      </div>
      <button class="hamburger">
        <i class="fas fa-bars"></i>
      </button>
      <div class="nav">
        <ul class="nav-items">
          <li class="nav-item"><a class="link" href="<?php echo $link;?>">Home</a></li>
          <li class="nav-item">
            <a class="link" href="<?php $_SERVER['PHP_SELF'] ?>">About us</a>
          </li>
          <li class="nav-item">
            <a class="link" href="../contribute/contribute.php">Contribute</a>
          </li>
          <li class="nav-item">
            <a class="link" href="../base/logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </header>
    <main class="main">
      <div class="left">
        <h1 class="catch-phrase">Who are we ?</h1>
        <p>We are two students from ISI Ariana who want to improve education quality by providing free study
          materials to all students</p>
        <div><a class="call-to-action" href="../contribute/contribute.php">Contribute</a></div>
      </div>
      <div class="right">
        <img src="../assets/undraw_folder_re_apfp.svg" alt="">
      </div>
    </main>
    <footer>&copy;2022 Study resources ISI</footer>
  </div>
  <script>
    function showNavBar() {
      const hamburgerIcon = document.querySelector(".hamburger");
      const navBar = document.querySelector(".nav");
      hamburgerIcon.addEventListener("click", () => {
        console.log("clicked")
        navBar.classList.toggle("show");
      })
}
showNavBar()
  </script>
</body>

</html>