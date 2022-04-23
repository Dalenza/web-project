<?php
session_start();
if (!isset($_SESSION['user'])) {
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
  <?php
  if (isset($_SESSION['msg'])) {
    echo "<div class='modal'></div>";
    echo "<div class='pop-up'>";
    echo "<p style='color: #000;'>" . $_SESSION['msg'] . "</p>";
    echo "<img src='../assets/x-button-327024.png' class='x' onclick='func()'>";
    echo "</div>";
    unset($_SESSION['msg']);
  }
  ?>
  <div class="wrapper">
    <header>
      <div class="logo">
        <a class="img" href="<?php $_SERVER['PHP_SELF'] ?>"><img src="../assets/b.png" alt="" /></a>
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
            <a class="link" href="../logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </header>
    <main class="content-wrapper">
      <h1>Hi, <b style="color: #f5cc5c"><?php echo $_SESSION['user']['fname']; ?></b>. Welcome to our site.</h1>
      <h2 class="welcome">We complement your learning journey</h2>
      <h3 class="search">Browse by category, subject or year</h3>
      <form class="filters" id="filters" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="select">
          <label for="category">category:</label>
          <select name="category" id="category">
            <option value="">---</option>
          </select>
        </div>
        <div class="select">
          <label for="subject">subject:</label>
          <select id="subject" name="subject">
            <option value="">---</option>
          </select>
        </div>
        <div class="select">
          <label for="year">year:</label>
          <select id="year" name="year">
            <option value="">---</option>
          </select>
        </div>
        <input class="btn btn--browse" type="submit" value="search">
      </form>




      <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once "../config.php";
        $category = $_POST['category'];
        $subject = $_POST['subject'];
        $year = $_POST['year'];
        $query = "SELECT * FROM RESOURCES WHERE CATEGORY = \"$category\" and SUBJECT = \"$subject\" and YEAR = \"$year\"";
        $res = mysqli_query($conn, $query);
        if (mysqli_num_rows($res) > 0) {
          echo "<div class='pdf-cards'>";
          echo "<div class='pdf-cards-header'><span>title</span><span>category</span><span>subject</span><span>year</span></div>";
          while ($row = mysqli_fetch_assoc($res)) {


            echo "<div class='pdf-card'>";
            echo "<div class='title'>" . "<a href='../resources/" . $row['filename'] . "' download>" . $row['filename'] . "</a></div>";
            echo "<div class='category'>" . $row['category'] . "</div>";
            echo "<div class='subject'>" . $row['subject'] . "</div>";
            echo "<div class='year'>" . $row['year'] . "</div>";
            echo "</div>";
          }


          echo "</div>";
        } else {
          echo "aucun document trouvé";
        }
        mysqli_close($conn);
      }

      ?>

    </main>
    <footer>&copy;2022 Study resources ISI</footer>
  </div>
  <script src="home.js"></script>
</body>

</html>