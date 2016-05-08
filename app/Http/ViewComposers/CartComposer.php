<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Cart;


class CartComposer {
	
	
	public function compose(View $view)
    {
        $view->with('cart', Cart::content());
    }
}