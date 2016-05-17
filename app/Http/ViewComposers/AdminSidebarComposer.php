<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Product;
use App\User;

class AdminSidebarComposer {
	

	public function compose(View $view)
	{
		$view->with('totalProducts', Product::count());
		$view->with('totalCustomers', User::count());
	}
}


