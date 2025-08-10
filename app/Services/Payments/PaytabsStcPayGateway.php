<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGateway;

class PaytabsStcPayGateway implements PaymentGateway
{
    public function __construct(private string $profileId, private string $serverKey)
    {
        // Initialize Paytabs STC Pay client
    }

    public function charge(float $amount, array $options = []): string
    {
        // Perform Paytabs STC Pay request
        return 'paytabs_' . uniqid();
    }

    public function refund(string $transactionId, float $amount): bool
    {
        // Perform refund request
        return true;
    }
}

