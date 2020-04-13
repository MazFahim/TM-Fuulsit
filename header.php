<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="login.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">


    <title> abcd </title>
  </head>
  <body>
    <center>
      <div class="Welcome">
      <h1>WELCOME TO Tuition Media</h1>
    </div>
    </center>
    <div>
      <?php
        if (isset($_SESSION['userid'])) {
            echo '<form action="logout.inc.php" method="post">

            <button type="submit" name="logout-submit">Logout</button>

            </form>';
          }
          else{
            echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/Email"></br>
            <input type="password" name="pwd" placeholder="password"></br>
            <button type="submit" name="login-submit">Login</button>

      </form>
      <a href="signup.php">Signup</a>';
          }
      ?>

    </div>
  </body>
</html>
