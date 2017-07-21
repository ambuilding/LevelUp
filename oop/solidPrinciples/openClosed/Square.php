<?php

namespace Acme;

class Square implements Shape {
	public $height;
	public $width;

	function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function area() {
		$area[] = $this->width * $this->height;
	}
}

// Entities should be open for extension, but closed for modification
// Change behavior without modifying source code...

// Separate extensible behavior behind an interface, and flip the dependencies.
