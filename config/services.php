<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'firebase' => [
        'api_key' => 'AIzaSyDuj90pVmBBYrUW3ukDAtKVipUvhr_wgfM', // Only used for JS integration
        'auth_domain' => 'rm-dispenser-beras.firebaseapp.com', // Only used for JS integration
        'database_url' => 'https://rm-dispenser-beras-default-rtdb.firebaseio.com/',
        'storage_bucket' => 'rm-dispenser-beras.appspot.com', // Only used for JS integration
    ],

];
