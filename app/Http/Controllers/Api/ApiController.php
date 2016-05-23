<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Response;

class ApiController extends Controller {

	protected $statusCode = 200;


	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;

		return $this;
	}

	public function getStatusCode()
	{
		return $this->statusCode;
	}

	public function respondNotFound($message = 'Not found!')
	{
		return $this->setStatusCode(404)->respondWithError($message);
	}

	public function respondInvalidRequest($message = 'Invalid request!')
	{
		return $this->setStatusCode(400)->respondWithError($message);
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

}


