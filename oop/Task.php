<?php

class Task {
	public $title;
	public $description;
	public $completed = false;

	// automaticly fire
	public function __construct($title, $description)
	{
		$this->title = $title;
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}
}

$task = new Task('Learn OOP', 'Wonderful...');
$task->complete();

var_dump($task->title);
