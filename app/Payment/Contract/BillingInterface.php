<?php

namespace App\Payment\Contract;

interface BillingInterface
{
    public function charge();
    public function credit();
}
