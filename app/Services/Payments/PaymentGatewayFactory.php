<?php

namespace App\Services\Payments;

use App\Contracts\PaymentGateway;
use InvalidArgumentException;

class PaymentGatewayFactory
{
    /**
     * @param array<string,mixed> $config
     */
    public function __construct(private array $config)
    {
    }

    public function make(string $driver): PaymentGateway
    {
        $driver = strtolower($driver);
        return match($driver) {
            'stripe' => new StripeGateway($this->config['stripe']['api_key']),
            'sadad' => new SadadGateway(
                $this->config['sadad']['merchant_id'],
                $this->config['sadad']['api_key']
            ),
            'paytabs' => new PaytabsStcPayGateway(
                $this->config['paytabs']['profile_id'],
                $this->config['paytabs']['server_key']
            ),
            'moyasar' => new MoyasarGateway($this->config['moyasar']['api_key']),
            default => throw new InvalidArgumentException("Unsupported gateway [$driver]"),
        };
    }
}

