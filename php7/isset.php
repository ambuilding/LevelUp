<?php

echo $name ?? 'Jeff';

// Null coalesce operator

$_GET['name'] = 'Joe';

//$name = isset($_GET['name']) ? $_GET['name'] : 'nothing';
$name = $_GET['name'] ?? 'nothing';

var_dump($name);