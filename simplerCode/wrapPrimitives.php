<?php

class Weight {
	protected $weight;

	public function __construct($weight)
	{
		$this->weight = $weight;
	}

	public function gain($pounds)
	{
		//$this->weight += $pounds;
		return new static($this->weight + $pounds);
		// we are treating it as an immutable object. Meaning, when it changes, we just create a new class.
	}

	public function lose($pounds)
	{
		return new static($this->weight - $pounds);
	}	
}

class WorkoutPlaceMember {
	public function __construct($name, Weight $weight)
	{
		//$weight->gain(5); // $weight = 15
	}

	public function workoutFor(TimeLength $length) //($hous) //($length)
	{
		$length->inSeconds();
		$length->inHours();
	}
}

//new WorkoutPlaceMember('Jane', 160);
$jane = new WorkoutPlaceMember('Jane', new Weight(160));
$jane->workoutFor(TimeLength::fromMinutes(45));//(TimeLength::fromHours(3));//(new TimeLength(3));//(3);

class TimeLength {
	protected $seconds;

	private function __construct($seconds)
	{
		$this->seconds = $seconds;
	}

	public function fromMinutes($minutes)
	{
		return new static($minutes * 60);
	}

	public function fromHours($hous)
	{
		return new static($hous * 60 * 60);
	}

	public function inSeconds()
	{
		return $this->seconds;
	}

	public function inHours()
	{
		return $this->seconds / 60 / 60;
	}
}

// does it bring clarity
// is there behavior?
// Consistency
// important domain concept

$latitude
$longitude
//or
class Location {
	public function __construct($latitude, $longitude)
	{
		$this->latitude = $latitude;
		$this->longitude = $longitude;
	}
}

class EmailAddress {
	public function __construct($email)
	{
		if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new InvalidArgumentException;
		}

		$this->email = $email;
	}
}

class Second {
	protected $seconds;

	public function __construct($seconds)
	{
		$this->seconds = $seconds;
	}
}

public function cache($data, Second $seconds)
{
	
}

//cache([], 50);
cache([], new Second(50));