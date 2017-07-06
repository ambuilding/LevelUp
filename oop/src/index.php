<?php

require 'vendor/autoload.php';

//use App\Person;
//use App\Animal;
//use App\Foo\Bar\Baz;

//php7
use App\{
	Person, 
	Animal,
	Foo\Bar\Baz
};

var_dump(new Person);
