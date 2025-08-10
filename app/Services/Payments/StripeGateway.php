<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGateway;
use Stripe\Stripe;
use Stripe\Charge;

class StripeGateway implements PaymentGateway
{
    public function __construct(string $apiKey)
    {
        Stripe::setApiKey($apiKey);
    }

    public function charge(float $amount, array $options = []): string
    {
        $charge = Charge::create([
            'amount' => (int)($amount * 100),
            'currency' => $options['currency'] ?? 'USD',
            'source' => $options['token'] ?? null,
            'description' => $options['description'] ?? 'Stripe Charge',
        ]);

        return $charge->id;
    }

    public function refund(string $transactionId, float $amount): bool
    {
        \Stripe\Refund::create([
            'charge' => $transactionId,
            'amount' => (int)($amount * 100),
        ]);

        return true;
    }
}

