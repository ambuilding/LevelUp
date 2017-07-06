<?php

$days = [
	'Monday',
	'Tuesday',
	'Thursday',
	'Friday'
];

$days[] = 'Sunday';

$chords = [
	'c' => 135,
	'a' => 613,
	'f' => 461,
	'g' => 572,
	'Guitar' => true
];

$chords['e'] = 357;

// die(var_dump($chords));
// print_r($chords);

require 'index.view.php'; //separationOfConcerns

?>