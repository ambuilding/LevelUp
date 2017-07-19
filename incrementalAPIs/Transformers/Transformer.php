<?php

namespace Acme\Transformers;

abstract class Transformer {
	
	/*
	 transform a collection of items

	 @param $items
	 @return array
	 */

	public function transformCollection(Array $items)
	{
		return array_map([$this, 'transform'], $items);
	}

	public abstract function transform($item);
}