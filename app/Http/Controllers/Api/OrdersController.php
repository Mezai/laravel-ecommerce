<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use App\Models\Order;
use Response;
use Ecommerce\Transformers\OrderTransformer;
use Illuminate\Support\Facades\Input;

class OrdersController extends ApiController
{


    protected $orderTransformer;

    public function __construct(OrderTransformer $orderTransformer)
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
        foreach ($dates as $key => $date) {
            if ((bool)preg_match("/^[0-9]{4}(0[1-9]|1[012])(0[1-9]|1[0-9]|2[0-9]|3[01])$/", $date) === false) {
                return false;
            }
        }
    
        $formated = $this->formatsDates($dates);

        foreach ($formated as $type => $date) {
        	if (!checkdate($date['month'], $date['day'], $date['year'])) {
        		return false;
        	}
        }

        return true;
    }

    private function formatsDates(array $dates)
    {
        $pattern = "/^([0-9]{4})(0[1-9]|1[012])(0[1-9]|1[0-9]|2[0-9]|3[01])$/";
        $format = [];
        foreach ($dates as $key => $date) {
            if ($key == 'startDate') {
                preg_match($pattern, $date, $startDate);
                $format['startDate'] = array(
                    'year' => $startDate[1],
                    'month' => $startDate[2],
                    'day' => $startDate[3],
                );
            }

            if ($key == 'endDate') {
                preg_match($pattern, $date, $endDate);
                $format['endDate'] = array(
                    'year' => $endDate[1],
                    'month' => $endDate[2],
                    'day' => $endDate[3],
                );
            }
        }
        return $format;
    }
}
