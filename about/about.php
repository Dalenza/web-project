<?php
  session_start();
  if(!isset($_SESSION['user'])){
		// echo "Vous n'etes pas autorisé à accéder <br> Veuillez contacter l'administrateur du site.";
    header('location:../index/index.php');
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../base.css" />
    <link rel="stylesheet" href="about.css" />
    <title>Study resources</title>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <a class="img" href="home.html"><img src="../assets/b.png" alt="" /></a>
            </div>
            <div class="nav">
                <ul class="nav-items">
                    <li class="nav-item"><a class="link" href="../home/home.php">Home</a></li>
                    <li class="nav-item">
                        <a class="link" href="$_SERVER['PHP_SELF']">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="link" href="../contribute/contribute.php">Contribute</a>
                    </li>
                    <li class="nav-item">
                        <a class="link" href="../index/index.php">Log out</a>
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
</body>

</html>