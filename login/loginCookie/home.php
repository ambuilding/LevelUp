<?php
	// enable sessions
	session_start();

  // suppress NOTICEs
  //error_reporting(E_ALL ^ E_NOTICE);
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
  	  You are logged in, <?= htmlspecialchars(@$_SESSION["user"]) ?>!
  	  <br>
  	  <a href="logout.php">log out</a>
  	 <?php } else { ?>
  	   You are not logged in!
  	 <?php } ?>
  </h3>
  <br>
  <b>Login Demos</b>
  <ul>
  	<li><a href="loginView.php">version</a></li>
    <li><a href="loginCookie.php">versionA</a></li>
  </ul>
</body>
</html>
