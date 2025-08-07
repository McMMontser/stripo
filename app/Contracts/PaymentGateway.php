<?php

namespace App\Contracts;

interface PaymentGateway
{
    /**
     * Charge a payment.
     *
     * @param float $amount
     * @param array $options
     * @return string Transaction identifier
     */
    public function charge(float $amount, array $options = []): string;

    /**
     * Refund a payment.
     *
     * @param string $transactionId
     * @param float $amount
     * @return bool
     */
    public function refund(string $transactionId, float $amount): bool;
}

