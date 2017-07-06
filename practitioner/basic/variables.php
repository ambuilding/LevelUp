<?php 

$name = 'Jane';

echo "Hello, {$name}";
echo "Hello, $name";
echo 'Hello, ' . $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<header>
	<h1><?= 'Hello, ' . htmlspecialchars($_GET['name']); ?></h1>
</header>
</body>
</html>