<?php

namespace App\Payment;

use App\Payment\Contract\PaymentInterface;

class Klarna implements PaymentInterface
{

	public function charge()
	{
		var_dump('hello');
	}

	public function credit()
	{
		# code...
	}
}