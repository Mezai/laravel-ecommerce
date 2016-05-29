<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\CartController;
use App;


class PaymentController extends Controller {

	protected $cart;

	function __construct(CartController $cart)
	{
		$this->cart = $cart;
	}

	public function stripe()
	{
		$payment = App::make('Ecommerce\Payment\StripePayment');
		
		try {
			$payment->charge([
				'email' => 'test@test.com',
				'token' => Input::get('stripeToken')
			]);

			$this->cart->delete();

			return redirect()->action('ConfirmationController@success');
		} catch (\Exception $e) {
			
			return redirect()->action('ConfirmationController@failed');
		}

	}

}