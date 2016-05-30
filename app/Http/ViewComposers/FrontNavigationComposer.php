<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Shop;

class FrontNavigationComposer {
	

	public function compose(View $view)
	{
		$view->with('shopName', Shop::where('id', 1)->first()->name);
		
	}
}