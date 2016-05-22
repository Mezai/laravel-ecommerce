<?php

namespace App\Http\Controllers\Back\Admin;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrdersController extends Controller {
	
	public function index()
	{
		$orders = Order::paginate(10);

		return view('back.pages.orders.index', ['orders' => $orders, 'pagination' => $orders]);
	}

}