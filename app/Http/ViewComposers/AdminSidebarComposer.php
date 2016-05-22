<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;

class AdminSidebarComposer {
	

	public function compose(View $view)
	{
		$view->with('totalProducts', Product::count());
		$view->with('totalCustomers', User::count());
		$view->with('totalOrders', Order::count());
	}
}


