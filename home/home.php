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
  <link rel="stylesheet" href="home.css" />
  <title>Study resources</title>
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="logo">
        <a class="img" href="<?php $_SERVER['PHP_SELF']?>"><img src="../assets/b.png" alt="" /></a>
      </div>
      <div class="nav">
        <ul class="nav-items">
          <li class="nav-item"><a class="link" href="<?php $_SERVER['PHP_SELF']?>">Home</a></li>
          <li class="nav-item">
            <a class="link" href="../about/about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="link" href="../contribute/contribute.php">Contribute</a>
          </li>
          <li class="nav-item">
            <a class="link" href="../logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </header>
    <main class="content-wrapper">
      <h1>Hi, <b style="color: #f5cc5c"><?php echo $_SESSION['user']['fname']; ?></b>. Welcome to our site.</h1>
      <h2 class="welcome">We complement your learning journey</h2>
      <h3 class="search">Browse by category, subject or year</h3>
      <div class="filters">
        <div class="select">
          <select name="category">
            <option value="cours">cours</option>
            <option value="serie">serie</option>
            <option value="examen principal">examen</option>
            <option value="examen partiel">ds</option>
          </select>
        </div>
        <div class="select">
          <select name="subject">
            <option value="math">math</option>
            <option value="web">web</option>
            <option value="systeme d'exploitation">system d'exploitation</option>
            <option value="logique formelle">logique formelle</option>
          </select>
        </div>
        <div class="select">
          <select name="year">
            <option value="1">1st</option>
            <option value="2">2nd</option>
            <option value="3">3rd</option>
          </select>
        </div>
      </div>
      <div class="pdf-cards">
        <div class="pdf-cards-header">
          <span>title</span>
          <span>category</span>
          <span>subject</span>
          <span>year</span>
        </div>
        <div class="pdf-card">
          <div class="title">Lorem ipsum dolor sit amet.</div>
          <div class="category">Lorem ipsum dolor sit amet consectetur.</div>
          <div class="subject">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Distinctio, voluptatem!
          </div>
          <div class="year">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias,
            repellat nemo!
          </div>
        </div>
        <div class="pdf-card">
          <div class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi culpa at ab obcaecati
            perferendis beatae fuga atque mollitia possimus saepe amet assumenda aspernatur laudantium est vero
            suscipit
            accusantium dolorem blanditiis nisi, maiores consectetur ex quam voluptatem! A voluptatum earum
            consequatur
            iste quam maxime blanditiis eveniet quos error tempora, harum illum.</div>
          <div class="category"></div>
          <div class="subject"></div>
          <div class="year"></div>
        </div>
      </div>
    </main>
    <footer>&copy;2022 Study resources ISI</footer>
  </div>
</body>

</html>