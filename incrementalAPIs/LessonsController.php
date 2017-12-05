<?php


protected $lessonTransformer;

public function __construct(lessonTransformer $lessonTransformer)
{
	$this->lessonTransformer = $lessonTransformer;
	$this->beforeFilter('auth.basic', ['on' => 'post']);
}

//Lessonscontroller
/*
Cast the result of query to JSON.
Are you sure that's what you want to do?
*/

public function index()
{
	// paginate
	$limit = Input::get('limit') ?? 3;
	$lessons = Lesson::paginate($limit);
	//dd(get_class_methods($lessons));

	$this->respondWithPagination($lessons, [
		'data' => $this->lessonTransformer->transformCollection($lessons->all())
	]);

	// 1. All is bad.
	// 2. No way to attach meta data.
	// 3. Linking db structure to the API output.
	// 4. No way to signal headers/response codes.
	$lessons = Lesson::all(); // really bad practice

	return Response::json([
		//'data' => $this->lessonTransformer->transformCollection($lessons)
		'data' => $this->lessonTransformer->transformCollection($lessons->all())
	], 200);
// Fractal
}


public function show($id)
{
	$lesson = Lesson::find($id);

	if (! $lesson) {
		return Response::json([
			'error' => [
				'message' => 'Lesson does not exist'
			]
		], 404);
	}

	return Response::json([
		'data' => $this->lessonTransformer->transform(lesson)
	], 200);

	/*
	Returning the proper HTTP status codes (and potentially application-specific codes)
	is paramount to building a successful API.
	*/
}



/*
private function transform($lessons)
{
	return array_map(function($lesson) {
		return [
			'title' => $lesson['title'],
			'body' => $lesson['body'],
			'active' => $lesson['active']
		];
	}, $lessons->toArray());
}*/

public function store()
{
	if (! Input::get('title') or !Input::get('body')) {
		//return some kind of response
		// 400, 403, 422, 404
		// provide a method
		return $this->setStatusCode(422)
			->respondWithError('Parameters failed validation for a lesson.');

		Lesson::create(Input::all());

		return $this->respondCreated('Lesson successfully created.');
	}
}

/*
protected function respondCreated()
{
	return $this->setStatusCode(201)->respond([
		'message' => 'Lesson successfully created.'
	]);
}
*/

