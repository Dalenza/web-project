<?php
session_start();
if (!isset($_SESSION['user'])) {
  // echo "Vous n'etes pas autorisé à accéder <br> Veuillez contacter l'administrateur du site.";
  header('location:../index/index.php');
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="../base.css" />
  <link rel="stylesheet" href="admin.css" />
  <title>Study resources</title>

  <script>
    function func() {
      document.getElementsByClassName("pop-up")[0].style.display = 'none';
      document.getElementsByClassName("modal")[0].style.display = 'none';
    }
  </script>


</head>

<body>
<?php require_once "../base/renderErrorMessage.php"; ?>

  <div class="wrapper">
    <header>
      <div class="logo">
        <a id="img" href="<?php $_SERVER['PHP_SELF'] ?>"></a>
      </div>
      <div class="nav">
        <ul class="nav-items">
          <li class="nav-item"><a class="link" href="<?php $_SERVER['PHP_SELF'] ?>">Home</a></li>
          <li class="nav-item">
            <a class="link" href="../about/about.php">About us</a>
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
    <main class="content-wrapper">
      <h1>Hi, <b id="user-name" style="color: #f5cc5c"><?php echo $_SESSION['user']['fname']; ?></b>. Welcome to our site.</h1>
      <h2 class="welcome">We complement your learning journey</h2>
      <h3 class="search">Browse by category, subject or year</h3>
      <form class="filters" id="filters" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="select">
          <label for="category">category:</label>
          <select name="category" id="category">
            <option value="">---</option>
            <option value="cours">cours</option>
            <option value="serie">serie</option>
            <option value="examen principal">examen</option>
            <option value="examen partiel">ds</option>
          </select>
        </div>
        <div class="select">
          <label for="year">year:</label>
          <select id="year" name="year">
            <option value="">---</option>
            <option value="1">1st</option>
            <option value="2">2nd</option>
            <option value="3">3rd</option>
          </select>
        </div>
        <div class="select">
          <label for="subject">subject:</label>
          <select id="subject" name="subject">
            <option value="">---</option>
          </select>
        </div>
        <input class="btn btn--browse" type="submit" value="search">
      </form>
      <!-- <div class="pdf-cards">
        <div class="pdf-cards-header">
          <span>title</span>
          <span>category</span>
          <span>year</span>
          <span>subject</span>
        </div>
        <div class="delete-modal">
          <h2>Are you sure you want to delete this!?</h2>
          <div class="btns">
            <form method="POST" action="delete.php">
              <input name="id" value="12" hidden="">
              <input type="submit" value="Delete">
            </form>
            <span class="no">No</span>
          </div>
        </div>
        <div class="update-modal">
              <form method="POST" action="update.php">
                <input name="id" value="12" hidden="">
                <input name="filename" value="Web.pdf" required="">
                <input name="category" value="cours" required="">
                <input name="subject" value="web" required="">
                <input name="year" value="1" required="">
                <input class="update" type="submit" value="Update">
              </form>
              <span class="close">close</span>
        </div>
        <div class="pdf-card">
          <span class="title"><a href="#">roger</a></span>
          <span class="category">cours</span>
          <span class="year">2nd</span>
          <span class="subject">web</span>
          <div class="slide-in">
            <div class="delete-btn">Delete</div>
            <div class="update-btn">Update</div>
          </div>
        </div>
      </div> -->




      <?php require_once "admin_pdf_cards.php"; ?>

    </main>
    <footer>&copy;2022 Study resources ISI</footer>
  </div>
  <script src="../home/home.js"></script>
  <script src="admin.js"></script>
</body>

</html>