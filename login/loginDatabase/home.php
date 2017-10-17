<?php
    // enable sessions
    session_start();
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Home</title>
  </head>
  <body>
    <h1>Home</h1>
    <h3>
      <?php if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true) { ?>
        You are logged in!
        <br>
        <a href="logout.php">log out</a>
      <?php } else { ?>
        You are not logged in!
      <?php } ?>
    </h3>
    <br>
    <b>Login Demos</b>
    <ul>
      <li><a href="loginDatabase.php">version</a></li>
    </ul>
  </body>
</html>
