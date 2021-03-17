<?php
return [
//  https://binance-docs.github.io/apidocs/spot/en/#change-log
    'binance' => [
        'slug' => 'binance',
        'name' => 'Binance',
        'logo' => '/img/binance-logo.svg',
        'api_key' => '1HT1tiwIBOIkH3AwCsnUdA45eK8xpJx7UZBXQMrbCxRlvB7djcPYQaNko4OyYltv',
        'api_url' => 'https://api.binance.com',
        'endpoints' => [
            'info' => '/api/v3/exchangeInfo'
        ]
    ],
    'bittrex' => [
        'slug' => 'bittrex',
        'name' => 'Bittrex',
        'logo' => '/img/bittrex.svg'
    ],
    'hitbtc' => [
        'slug' => 'hitbtc',
        'name' => 'HitBTC',
        'logo' => '/img/hitbtc-logo.svg'
    ],
    'kraken' => [
        'slug' => 'kraken',
        'name' => 'Kraken',
        'logo' => '/img/kraken-2.svg'
    ],
];
