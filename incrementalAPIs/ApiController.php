<?php

use Illuminate\Http\Response as IlluminateResponse;

class ApiController extends BaseController {

	protected $statusCode = 200;

	public function getStatusCode()
	{
		return $this->statusCode;
	}

	public function respond($data, $headers = [])
	{
		return Response::json($data, $this->getStatusCode(), $headers);
	}

	public function respondWithError($message)
	{
		return $this->respond([
			'error' => [
				'message' => $message,
				'status_code' => $this->getStatusCode()
			]
		]);
	}

	public function respondCreated($message = 'Not Found!')
	{
		return $this->setStatusCode(IlluminateResponse::HTTP_NOT_FOUND)->respond($message);
	}

	public function respondCreated($message = 'Internal Error!')
	{
		return $this->setStatusCode(500)->respond($message);
	}

	public function respondCreated($message)
	{
		return $this->setStatusCode(201)->respond($message);
	}

	/*
	 @param Paginator $lessons
	 @param $data
	 @param mixed
	 */

	public function respondWithPagination(Paginator $lessons, $data) {
		$data = array_merge($data, [
			'paginator' => [
				'total_count' => $lessons->getTotal(),
				'total_pages' => ceil($lessons->getTotal() / $lessons->getPerPage()),
				'current_page' => $lessons->getCurrentPage(),
				'limit' => $lesson->getPerPage()
			]
		]);
	
		return $this->respond($data);
	}
}