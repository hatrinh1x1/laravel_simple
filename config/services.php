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
        'model' => App\Models\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '195593334319486',
        'client_secret' => '6336709c9527c7ceab79e7a8c149de9f',
        'redirect' => 'http://local.simple.com/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '1098850847951-c5qsina8nco4m26adfq9a5h6rdea17bn.apps.googleusercontent.com',
        'client_secret' => 'A4Qto5LNPxoEnA39eC9ZTBLM',
        'redirect' => 'http://local.simple.com/login/google/callback',
    ],

    'twitter' => [
        'client_id' => 'pFNaq5VcZH5CV7aCGZndh4XeT',
        'client_secret' => 'lyRnbECIBuX7hI9FoXmm7ssnYE5AaTO89bVBDDPuFT1BYOCj9X',
        'redirect' => 'http://local.simple.com/login/twitter/callback',
    ],
];
