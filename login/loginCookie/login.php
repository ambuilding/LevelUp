<?php
	session_start();

	// database
	define("USER", "dongniya");
	define("PASS", "dongniya");

	// check if username and password were submitted
	if (isset($_POST["user"]) && isset($_POST["pass"])) {
		// if username and password are valid, log user in
		if ($_POST["user"] == USER && $_POST["pass"] == PASS) {
			// remember that user's logged in
			$_SESSION["authenticated"] = true;
			$_SESSION["user"] = $_POST["user"];

			// save username in cookie for a week
			setcookie("user", $_POST["user"], time() + 7 * 24 * 60 * 60);

			// redirect user to home page, using absolute path, per
			redirect("home.php");
		}
	} else {
		redirect("loginView.php");
	}

	function redirect($file)
	{
		$host = $_SERVER["HTTP_HOST"];
		$path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
		header("Location: http://$host$path/$file");
		exit;
	}
?>
