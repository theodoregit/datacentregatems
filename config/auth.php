<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        
        'unit-manager' => [
            'driver' => 'session',
            'provider' => 'unit_manager',
        ],

        'unit-manager-api' => [
            'driver' => 'token',
            'provider' => 'unit_manager',
        ],
        
        'dc-manager' => [
            'driver' => 'session',
            'provider' => 'dc_manager',
        ],

        'dc-manager-api' => [
            'driver' => 'token',
            'provider' => 'dc_manager',
        ],
        
        'inf-manager' => [
            'driver' => 'session',
            'provider' => 'inf_manager',
        ],

        'inf-manager-api' => [
            'driver' => 'token',
            'provider' => 'inf_manager',
        ],
        'dc-admin' => [
            'driver' => 'session',
            'provider' => 'dc_admin',
        ],

        'dc-admin-api' => [
            'driver' => 'token',
            'provider' => 'dc_admin',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        
        'unit_manager' => [
            'driver' => 'eloquent',
            'model' => App\UnitManagerAuth::class,
        ],

        'dc_manager' => [
            'driver' => 'eloquent',
            'model' => App\DCManagerAuth::class,
        ],

        'inf_manager' => [
            'driver' => 'eloquent',
            'model' => App\InfManagerAuth::class,
        ],

        'dc_admin' => [
            'driver' => 'eloquent',
            'model' => App\DCAdminAuth::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'unit-manager' => [
            'provider' => 'unit_manager',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'dc-manager' => [
            'provider' => 'dc_manager',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'inf-manager' => [
            'provider' => 'inf_manager',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'dc-admin' => [
            'provider' => 'dc_admin',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
