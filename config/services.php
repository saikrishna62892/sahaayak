<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '255442959012-sr42pqsic33sbth40tlorllk1m67f5cr.apps.googleusercontent.com',
        'client_secret' => 'UCkEfjIwKNSs4XefTaXNFdRt',
        'redirect' => 'http://sahaayakdemo.herokuapp.com/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '2729144090656583',
        'client_secret' => '82853102fe148524a7a5ae3f69ff7af4',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

];
