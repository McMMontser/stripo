<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGateway;

class SadadGateway implements PaymentGateway
{
    public function __construct(private string $merchantId, private string $apiKey)
    {
        // Initialize SADAD SDK client here
    }

    public function charge(float $amount, array $options = []): string
    {
        // Perform SADAD payment request
        // return transaction reference
        return 'sadad_' . uniqid();
    }

    public function refund(string $transactionId, float $amount): bool
    {
        // Perform SADAD refund request
        return true;
    }
}

