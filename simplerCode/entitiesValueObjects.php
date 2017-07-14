<?php

class Assignment {

	private $title;
	private $difficultyLevel;

	function __construct($title, DifficultyLevel $difficultyLevel)
	{
		$this->title = $title;
		$this->difficultyLevel = $difficultyLevel;
	}

	public function getDifficulty()
	{
		return new DifficultyLevel($this->difficultyLevel);
	}
}

$assignment = new Assignment('History of King Tut', new DifficultyLevel('intermediate'));

class DifficultyLevel {
	public $difficulty;
	protected $acceptableDifficultyLevels = ['easy', 'moderate', 'intermediate', 'advanced'];

	function __construct($difficulty)
	{
		$this->disallowInvalidDifficultyLevel($difficulty)
		// if (! in_array($difficulty, ['easy', 'intermediate', 'advanced'])) {
		// 	throw new InvalidArgementException('Invalid difficulty level provided.');
		// }
		$this->difficulty = $difficulty;
	}

	private function disallowInvalidDifficultyLevel($difficulty)
	{
		if (! in_array($difficulty, $this->acceptableDifficultyLevels)) {
			throw new InvalidArgementException('Invalid difficulty level provided.');
		}	
	}

	public function __toString()
	{
		return $this->difficulty;
	}
}

/*
class Assignment extends Eloquent {

	private $title;
	private $difficulty;

	function __construct($title, $difficulty)
	{
		$this->title = $title;
		$this->setTitle($difficulty);
	}

	private function setTitle($difficulty)
	{
		// validation here
		$this->difficulty = $difficulty;
	}
}

$assignment = new Assignment('History of King Tut', 'intermediate');