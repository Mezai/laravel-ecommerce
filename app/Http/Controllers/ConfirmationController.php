<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\CartController;
use App\Models\Order;
class ConfirmationController extends Controller
{

    protected $cart;

    public function __construct(CartController $cart)
    {
        $this->cart = $cart;
    }
    
    public function success($payment)
    {

        Order::create([
        	'total_paid' => $this->cart->getCartTotal(),
        	'payment' => $payment,
        	'valid' => 1,
        ]);

        $this->cart->delete();

        return view('front.pages.confirmation');
    }

    public function failed()
    {
        return view('front.pages.failed');
    }
}
