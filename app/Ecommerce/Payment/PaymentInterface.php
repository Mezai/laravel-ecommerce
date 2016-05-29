<?php

namespace Ecommerce\Payment;


interface PaymentInterface {

	public function charge(array $data);

}