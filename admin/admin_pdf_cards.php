<?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once "../base/config.php";
        $category = $_POST['category'];
        $subject = $_POST['subject'];
        $year = $_POST['year'];
        $query = "SELECT * FROM RESOURCES";
        $test = false;
        if($category != ""){
          $test = true;
          $query .= " WHERE CATEGORY = \"$category\"";
        }
        if($subject != ""){
          if($test)
            $query .= " and SUBJECT = \"$subject\"";
          else
            $query .= " WHERE SUBJECT = \"$subject\"";
          $test = true;
        }
        if($year != ""){
          if($test)
            $query .= " and YEAR = \"$year\"";
          else
            $query .= " WHERE YEAR = \"$year\"";
        }
        $res = mysqli_query($conn, $query);
        if (mysqli_num_rows($res) > 0) {
          echo "<div class='pdf-cards'>
          <div class='pdf-cards-header'>
          <span>title</span><span>category</span><span>year</span><span>subject</span>
          </div>";
          while ($row = mysqli_fetch_assoc($res)) {
            echo "<div class='pdf-card'>
            <span class='title'>" . "<a href='../resources/" . $row['filename'] . "' download>" . $row['filename'] . "</a></span>
            <span class='category'>" . $row['category'] . "</span>
            <span class='year'>" . $row['year'] . "</span>
            <span class='subject'>" . $row['subject'] . "</span>";

            echo "<form method='POST' action='delete.php'>
            <input name='id' value='" . $row['id'] ."' hidden>
            <input type='submit' value='Delete'>
            </form>";
            
            echo "<form method='POST' action='update.php'>
            <input name='id' value='" . $row['id'] ."' hidden>
            <input name='filename' value='" . $row['filename'] ."' required>
            <input name='category' value='" . $row['category'] ."'required>
            <input name='subject' value='" . $row['subject'] ."'required>
            <input name='year' value='" . $row['year'] ."'required>
            <input type='submit' value='Update'>
            </form>";
            // echo "<a href=\"delete.php\">" . "update</a>";
            echo "</div>";
          }


          echo "</div>";
        } else {
          echo "aucun document trouvé";
        }
        mysqli_close($conn);
      }


