<?php

return [
	'database' => [
		'name' => 'databaseName',
		'username' => 'username',
		'password' => 'password',
   		'connection' => 'mysql:host=localhost',
   		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
     		// EXCEPTION \ WARNING
		]
	]
];