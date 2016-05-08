<?php

namespace App\Payment\Contract;


interface StripeInterface {

	public function setApiKey();
			
	public function customer();

	public function charge();

}