<?php

return [

    'driver' => env('NEWSLETTER_DRIVER', Spatie\Newsletter\Drivers\MailchimpDriver::class),

    'driver_arguments' => [
        'api_key' => env('NEWSLETTER_API_KEY'),
        'endpoint' => env('NEWSLETTER_ENDPOINT', 'https://us17.api.mailchimp.com/3.0'),
    ],

    'default_list_name' => 'subscribers',

    'lists' => [
        'subscribers' => [
            'id' => env('NEWSLETTER_LIST_ID'),
        ],
    ],
];
