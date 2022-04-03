<?php
    require_once "control.php";
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mail = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM USERS WHERE MAIL = '$mail' and PASS = '$password'";
        $res = mysqli_query($conn, $query);
        if(mysqli_num_rows($res) > 0){
            $row = mysqli_fetch_assoc($res);
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            header("location: home.php");
        }
        else
            $error = "invalid Email or Password";
    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="base.css">
    <title>Study Resources</title>
    <script>
        function func(){
            document.getElementsByClassName("pop-up")[0].style.display = 'none';
            document.getElementsByClassName("modal")[0].style.display = 'none';
        }
    </script>
</head>

<body>
    <?php
        if(isset($error)){
            echo "<div class='modal'></div>";
            echo "<div class='pop-up'>";
            echo "<p>$error</p>";
            echo "<img src='assets\x-button-327024.png' class='x' onclick='func()'>";
            echo "</div>";
        }
    ?>
    <div class="container">
        <form class="left" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            <div class="left__header">
                <h1>Welcome back</h1>
                <p>welcome back! please enter your details</p>
            </div>
            <div class="left__body">
                <div class="form-control">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-control">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <input class="btn" type="submit" value="Sign in">
                <p>don't have an account? <a href="sign-up.php">Sign up</a></p>
            </div>
        </form>
        <div class="right">
            <img src="assets/undraw_social_sharing_re_pvmr.svg" alt="">
        </div>
    </div>
    <script src="index.js"></script>
</body>

</html>