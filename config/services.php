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

    'google' => [
        'client_id' => '555469964730-s4p21k3ros06fri4tfkvbruhfua2fqko.apps.googleusercontent.com',
        'client_secret' => 'oqW8uWD00te6rLSHxBOVIVTN',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'github' => [
        'client_id' => '4990d5a073ebcb6e2848',
        'client_secret' => '371a7c0b579c16e85520a19a1cac33d90c52f2da',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],

    'bitbucket' => [
        'client_id' => '6DLTPzJXGNP6BQkNRQ',
        'client_secret' => 'mtPWVHZZvY5A9wRTkKTXWVTAwLhAdt3D',
        'redirect' => 'http://localhost:8000/auth/bitbucket/callback',
    ],

];
