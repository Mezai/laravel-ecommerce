<?php

namespace App\Payment;

use App\Payment\Contract\BillingInterface;
use App\Payment\Contract\StripeInterface;
use Stripe;

class Stripe implements BillingInterface, StripeInterface 
{

	public function customer()
	{
		
	}

	public function charge()
	{

	}

    public function debit()
    {

    
    }

    public function credit()
    {
    }
}
