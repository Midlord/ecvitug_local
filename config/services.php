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
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
    
    'facebook' => [
        'client_id' => '2339111616376767',
        'client_secret' => '6b867da27d94509e0a9f01e05ad415cb',
        'redirect' => 'https://ecvitugconstructions.000webhostapp.com/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '228748301934-a7c0r6ei29998tkj9f93sp98tf05eqdg.apps.googleusercontent.com',
        'client_secret' => 'A1Fdx2PAspKivbw3gzlOB4KD',
        'redirect' => 'https://ecvitugconstructions.000webhostapp.com/login/google/callback',
    ],



];
