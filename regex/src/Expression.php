<?php

class Expression
{
    // The generated regular expression.
    protected $expression = '';

    // Make a new instance.
    public static function make()
    {
    	return new static;
    }

    public function find($value)
    {
    	return $this->add($this->sanitize($value));
    }

    // Alias for the "find" method.
    public function then($value)
    {
    	return $this->find($value);
    }

    // Find any number of characters.
    public function anything()
    {
    	return $this->add('.*?');
    }

    // Find any number of characters, except the given value.
    public function anythingBut($value)
    {
    	// "/fooNOTbarbiz/ /foo(?!bar)biz/"
    	return $this->add("(?!$value).*?");
    }

    // Optionally find a value.
    public function maybe($value)
    {
    	$value = $this->sanitize($value);
		//$this->expression .= '(' . $value . ')?';

    	return $this->add("(?:$value)?");
    }

    // Append a value to the regular expression.
    protected function add($value)
    {
    	$this->expression .= $value;

    	return $this;
    }

    // Sanitize the given value.
    protected function sanitize($value)
    {
    	return preg_quote($value, '/');
    }

    // Test the given value against the regex.
    public function test($value)
    {
    	//var_dump($this->getRegex());
    	return (bool) preg_match($this->getRegex(), $value);
    }

    // Fetch the generated regular expression.
    public function getRegex()
    {
    	return '/' . $this->expression . '/';
    }

    // Handle when the object is referenced as a string.
    public function __toString()
    {
    	return $this->getRegex();
    }
}
