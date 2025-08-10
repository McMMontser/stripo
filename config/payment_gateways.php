<?php

return [
    'stripe' => [
        'api_key' => env('STRIPE_API_KEY', ''),
    ],
    'sadad' => [
        'merchant_id' => env('SADAD_MERCHANT_ID', ''),
        'api_key' => env('SADAD_API_KEY', ''),
    ],
    'paytabs' => [
        'profile_id' => env('PAYTABS_PROFILE_ID', ''),
        'server_key' => env('PAYTABS_SERVER_KEY', ''),
    ],
    'moyasar' => [
        'api_key' => env('MOYASAR_API_KEY', ''),
    ],
];

