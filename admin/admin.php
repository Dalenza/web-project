<?php
session_start();
if (!isset($_SESSION['user']) or $_SESSION['user']['role'] != 'admin') {
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Study resources</title>

  <script>
    function func() {
      document.getElementsByClassName("pop-up")[0].style.display = 'none';
      document.getElementsByClassName("modal")[0].style.display = 'none';
    }
    function hideModal() {
      var element = document.getElementById("modal");
      element.classList.add("none");
    }
    function showModal() {
      var element = document.getElementById("modal");
      element.classList.remove("none");
    }
  </script>


</head>

<body>
<?php require_once "../base/renderErrorMessage.php"; ?>
  <div id='modal' class="modal none"></div>
  <div class="wrapper">
    <header>
      <div class="logo">
        <a id="img" href="<?php $_SERVER['PHP_SELF'] ?>"></a>
      </div>
      <button class="hamburger">
        <i class="fas fa-bars"></i>
      </button>
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
      




      <?php require_once "admin_pdf_cards.php"; ?>

    </main>
    <footer>&copy;2022 Study resources ISI</footer>
  </div>
  <script src="../home/home.js"></script>
  <script src="admin.js"></script>
</body>

</html>