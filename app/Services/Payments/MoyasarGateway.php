<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGateway;

class MoyasarGateway implements PaymentGateway
{
    public function __construct(private string $apiKey)
    {
        // Initialize Moyasar client
    }

    public function charge(float $amount, array $options = []): string
    {
        // Perform Moyasar payment request
        return 'moyasar_' . uniqid();
    }

    public function refund(string $transactionId, float $amount): bool
    {
        // Perform Moyasar refund
        return true;
    }
}

