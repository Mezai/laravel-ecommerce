<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Cart;


class CartComposer {
	
	protected $cart;


	public function __construct(Cart $cart) {
		$this->cart = $cart;
	}

	public function compose(View $view)
    {
        $view->with('cart', Cart::content());
    }
}