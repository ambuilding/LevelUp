<?php

class Person {
	//Encapsulation simply refers to the act of hiding information.
	private $name;
	private $age;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age * 365;
	}

	public function setAge($age)
	{
		if ($age < 18) {
			throw new Exception("Person is not old enough");
		}
		$this->age = $age;
	}
}

$ergou = new Person('Er Gou');
$ergou->setAge(19);
$ergou->age = 3;
var_dump($ergou->getAge());<?php

class Person {
	public $name;
	public $age;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age * 365;
	}

	public function setAge($age)
	{
		if ($age < 18) {
			throw new Exception("Person is not old enough");
		}
		$this->age = $age;
	}
}

$ergou = new Person('Er Gou');
$ergou->setAge(19);
$ergou->age = 3;
var_dump($ergou->getAge());