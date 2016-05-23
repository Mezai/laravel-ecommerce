<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use App\Models\Order;
use Response;
use Ecommerce\Transformers\OrderTransformer;
use Illuminate\Support\Facades\Input;


class OrdersController extends ApiController {


	protected $orderTransformer;

	function __construct(OrderTransformer $orderTransformer)
	{
		$this->orderTransformer = $orderTransformer;
	}

	public function index()
	{
		$dates = [
			'startDate' => Input::get('startDate'),
			'endDate' => Input::get('endDate'),
		];

	
		if (!$this->validateDates($dates)) {

			return $this->respondInvalidRequest();
			
		}
		
		$from = date("Y-m-d", strtotime(Input::get('startDate')));
		$to = date("Y-m-d", strtotime(Input::get('endDate')));

		$orders = Order::whereBetween('created_at', [$from, $to])->get();

		return $this->respond([
			'data' => $this->orderTransformer->transformCollection($orders->all())
		]);
	}


	private function validateDates(array $dates)
	{

		foreach ($dates as $key => $value) {
			if (!$this->formatsDates($value)) {
				return false;
			}
		}

		return true;
	}

	private function formatsDates($date)
	{
		return (preg_match("/^([0-9]{4})-?([0-9]{2})-?([0-9]{2})$/", $date, $formated) === false) ? false : $formated;
	}
	
}