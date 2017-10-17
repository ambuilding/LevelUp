<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
	<?php if (count($_POST) > 0) echo "Invalid Login"; ?>
	<form action="login.php" method="post"> 
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="user" value="<?= (isset($_POST["user"])) ? htmlspecialchars($_POST["user"]) : htmlspecialchars(@$_COOKIE["user"]) ?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Log In"></td>
			</tr>
		</table>
	</form>
</body>
</html>
