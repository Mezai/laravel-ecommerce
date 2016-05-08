<?php
namespace App\Payment;



class Netaxept extends NetaxeptProvider implements BillingInterface 
{
	public function debit()
	{
		
	}

	public function credit()
	{
		# code...
	}

	public function redirect()
	{
		$transactionId = $this->register();


	}



	private function register()
	{
		return 'transaction id';	
	}

	private function process()
	{

	}

	private function query()
	{

	}
}