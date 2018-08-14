<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-12
 * Time: 1:18 AM
 */

namespace Bnabriss\ZohoBooks;


use Illuminate\Support\Facades\Cache;

trait Auth
{

    public static function getToken()
    {

        return static::cacheGet() ?: static::refreshToken();
    }

    public static function refreshToken()
    {
        $ch = curl_init('https://accounts.zoho.com/oauth/v2/token?'.http_build_query([
                'refresh_token' => config('zoho-books.refresh_token'),
                'client_id'     => config('zoho-books.client_id'),
                'client_secret' => config('zoho-books.client_secret'),
                'grant_type' => 'refresh_token',

            ]));


        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type:application/x-www-form-urlencoded',
        ]);

        curl_setopt($ch, CURLOPT_POST, true);


        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $returned = curl_exec($ch);
        if (curl_error($ch)) {
            return (object)[
                'code'    => -1,
                'message' => 'curl error',
            ];
        }
        $returned = json_decode($returned);

        static::cachePut($token = data_get($returned, 'access_token'), data_get($returned, 'expires_in_sec')/60);
        return $token;
    }


    protected static function cache()
    {
        return Cache::store(config('zoho-books.default_cache'));
    }

    protected static function cachePut($v, $t = 58)
    {
        static::cache()->put('zoho-auth', $v, $t);
    }

    protected static function cacheGet()
    {
        return static::cache()->get(config('zoho-books.cache_key'));
    }
}