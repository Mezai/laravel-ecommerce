<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use App\Models\Order;
use Response;
use Ecommerce\Transformers\OrderTransformer;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Api\RequestValidator;


class OrdersController extends ApiController
{


    protected $orderTransformer;

    protected $requestValidator;

    public function __construct(OrderTransformer $orderTransformer, RequestValidator $requestValidator)
    {
        $this->orderTransformer = $orderTransformer;
        $this->requestValidator = $requestValidator;
    }

    public function index()
    {
        $dates = [
            'startDate' => Input::get('startDate'),
            'endDate' => Input::get('endDate'),
        ];

    
        if (!$this->requestValidator->validateDates($dates)) {
            return $this->respondInvalidRequest();
        }

        $orders = Order::whereBetween('created_at', [$dates['startDate'], $dates['endDate']])->get();

        return $this->respond([
            'orders' => $this->orderTransformer->transform($orders->all())
        ]);
    }
}
