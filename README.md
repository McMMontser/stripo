# Payment Gateway Demo

This repository demonstrates integrating multiple payment gateways in a Laravel-style PHP application using a strategy pattern. Supported gateways include:

- Stripe
- SADAD
- Paytabs STC Pay
- Moyasar

The `PaymentGateway` interface defines a common contract. Concrete implementations handle each provider separately, while the `PaymentGatewayFactory` resolves them based on configuration.

A minimal `Dockerfile` and `docker-compose.yml` are included to run the application in a containerized environment.

## Usage

1. Copy `.env.example` to `.env` and provide credentials for each gateway.
2. Build and start the container:
   ```bash
   docker-compose up --build
   ```
3. Use `PaymentService` within your Laravel controllers or services to charge or refund via the desired gateway.

## Testing

PHP syntax can be checked with:
```bash
php -l app/Services/Payments/StripeGateway.php
```

