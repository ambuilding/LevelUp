<?php

namespace Acme\LessonTransformer;

class LessonTransformer extends Transformer {

	/*
	 transform a lesson

	 @param $lesson
	 @return array
	 */

	public function transform($lesson)
	{
		return [
			'title' => $lesson['title'],
			'body' => $lesson['body'],
			'active' => (boolean) $lesson['active']
		];
	}
	//We need to solve that issue of linking our API output to the structure of our database tables. One remedy might be to leverage transformations. 
}