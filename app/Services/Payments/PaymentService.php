<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGateway;

class PaymentService
{
    public function __construct(private PaymentGatewayFactory $factory)
    {
    }

    public function charge(string $driver, float $amount, array $options = []): string
    {
        $gateway = $this->resolve($driver);
        return $gateway->charge($amount, $options);
    }

    public function refund(string $driver, string $transactionId, float $amount): bool
    {
        $gateway = $this->resolve($driver);
        return $gateway->refund($transactionId, $amount);
    }

    protected function resolve(string $driver): PaymentGateway
    {
        return $this->factory->make($driver);
    }
}

