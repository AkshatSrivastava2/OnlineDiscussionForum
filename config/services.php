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

    'facebook' => [
        'client_id' => '1404931806258989',
        'client_secret' => '5702d351ea698d6da34cfac8dea78ddd',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],


    'google' => [
        'client_id' => '205617122056-b2s93ortlh2odtiqri9hsmeqt1peli5h.apps.googleusercontent.com',
        'client_secret' => 'qoVf5fNMpsUDuJNSSh8EbtWT',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

];
