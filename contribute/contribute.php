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
  <link rel="stylesheet" href="contribute.css" />
  <title>Study resources</title>
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="logo">
        <a class="img" href="<?php echo $link; ?>"><img src="../assets/b.png" alt="" /></a>
      </div>
      <div class="nav">
        <ul class="nav-items">
          <li class="nav-item"><a class="link" href="<?php echo $link; ?>">Home</a></li>
          <li class="nav-item">
            <a class="link" href="../about/about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="link" href="<?php $_SERVER['PHP_SELF'] ?>">Contribute</a>
          </li>
          <li class="nav-item">
            <a class="link" href="../base/logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </header>
    <main class="content-wrapper">
      <h2 class="welcome">Don't see what you're looking for</h2>
      <h3 class="search">Help us enrich our database!</h3>
      <form class="form" method="POST" action="upload.php" enctype="multipart/form-data">
        <div class="form-control">
          <label for="title">title:</label>
          <input type="text" name="title" id="title" required placeholder="exp: examen analyse L1Sem1">
        </div>
        <div class="form-control">
          <label for="category">category:</label>
          <div class="select">
            <select name="category" id="category" required>
              <option value="cours">cours</option>
              <option value="serie">serie</option>
              <option value="examen principal">examen</option>
              <option value="examen partiel">ds</option>
            </select>
          </div>
        </div>
        <div class="form-control">
          <label for="year">year:</label>
          <div class="select">
            <select name="year" id="year" required>
              <option value="1">1st</option>
              <option value="2">2nd</option>
              <option value="3">3rd</option>
            </select>
          </div>
        </div>
        <div class="form-control">
          <label for="subject">subject:</label>
          <div class="select">
            <select name="subject" id="subject" required>
              <option value="math">math</option>
              <option value="web">web</option>
              <option value="analyse">analyse</option>
              <option value="systeme d'exploitation">system d'exploitation</option>
              <option value="logique formelle">logique formelle</option>
            </select>
          </div>
        </div>
        <div class="form-control">
          <div class="file-input">
            <input type="file" id="file" class="file" name="file" required>
            <label for="file">Select file</label>
          </div>
          <input class="btn btn--submit" type="submit" value="submit">
        </div>
      </form>
    </main>

    <footer>&copy;2022 Study resources ISI</footer>
  </div>
  <script src="../home/home.js"></script>
</body>