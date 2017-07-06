<?php

return [
	'database' => [
		'name' => 'friday',
		'username' => 'root',
		'password' => 'wangqisql',
   		'connection' => 'mysql:host=localhost',
   		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
     		// EXCEPTION \ WARNING
		]
	]
];