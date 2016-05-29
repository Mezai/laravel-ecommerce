<?php

namespace Ecommerce\Payment;

use Stripe\Stripe;
use Log;
use Stripe\Charge;
use Stripe\Error\Card;
use Stripe\Error\RateLimit;
use Stripe\Error\Base;
use Stripe\Error\InvalidRequest;
use Stripe\Error\Authentication;
use Stripe\Error\ApiConnection;

class StripePayment implements PaymentInterface
{
    
    public function __construct()
    {
        Stripe::setApiKey('sk_test_DfRd2D3H4Nu0C5D6tDFbYhzE');
    }

    public function charge(array $data)
    {
        try {
            return Charge::create([
                'amount' => 1000,
                'currency' => 'sek',
                'description' => $data['email'],
                'card' => $data['token']
            ]);
        } catch (Card $e) {
            Log::notice($e->getMessage());
            throw new \Exception("Error Processing Payment");
        } catch (RateLimit $e) {
            Log::notice($e->getMessage());
            throw new \Exception("Error Processing Payment");
        } catch (InvalidRequest $e) {
            Log::notice($e->getMessage());
            throw new \Exception("Error Processing Payment");
        } catch (Authentication $e) {
            Log::notice($e->getMessage());
            throw new \Exception("Error Processing Payment");
        } catch (ApiConnection $e) {
            Log::notice($e->getMessage());
            throw new \Exception("Error Processing Payment");
        } catch (Base $e) {
            Log::notice($e->getMessage());
            throw new \Exception("Error Processing Payment");
        }
    }
}
