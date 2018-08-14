<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Guards
    |--------------------------------------------------------------------------
    |
    | set expiration time for each guard that you want to use,
    | expires_after : set the time in seconds that you want to expire
    | the token, regardless of token usage. 0 to disable.
    | check_after : set the time in seconds that you want to expire the
    | token if the token isn't used during this duration. 0 to disable
    | check_every : this the time in seconds to update last_request time
    | to prevent update in every request, set it to 0 to update in every request
    |
    | Re-migrate your database if you add new guards, or manually update the
    | database to add guard value to `tokens`.`guard` enum
    |
    */
    'organization_id' => env('ZOHO_BOOKS_ORGANIZATION_ID'),
    'client_id' => env('ZOHO_BOOKS_CLIENT_ID'),
    'client_secret' => env('ZOHO_BOOKS_CLIENT_SECRET'),
    'redirect_url' => env('ZOHO_BOOKS_REDIRECT_URL'),
    'refresh_token' => env('ZOHO_BOOKS_REFRESH_TOKEN'),
    'token_type' => 'Bearer',

    'default_cache' => config('cache.default'),
    'cache_key' => 'zoho-auth'


];