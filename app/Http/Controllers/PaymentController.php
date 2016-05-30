<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\CartController;
use App;

class PaymentController extends Controller {

	protected $cart;

    public function __construct(CartController $cart)
    {
        $this->cart = $cart;
    }

	public function stripe()
	{

		$payment = App::make('Ecommerce\Payment\StripePayment');
		try {
			$payment->charge([
				'email' => Input::get('stripeEmail'),
				'amount' => (int)$this->cart->getCartTotal() * 100,
				'token' => Input::get('stripeToken')
			]);

			return redirect()->action('ConfirmationController@success', 'stripe');

		} catch (\Exception $e) {
			
			return redirect()->action('ConfirmationController@failed');
		}

	}

}