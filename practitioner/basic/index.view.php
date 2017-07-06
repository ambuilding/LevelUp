<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?= ucwords('playing the guitar'); ?>
	<ul>
		<?php
			foreach ($days as $day) {
				echo "<li>$day</li>";
			}
		?>

		<?php foreach ($days as $day) : ?>
			<li><?= $day; ?></li>
		<?php endforeach; ?>

		<?php foreach ($chords as $key => $val) : ?>
			<li><strong><?= ucwords($key); ?></strong> <?= $val; ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>