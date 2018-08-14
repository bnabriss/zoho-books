<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-05
 * Time: 4:02 PM
 */

namespace Bnabriss\ZohoBooks;


class Rest
{
    use Auth;

    static $organization_id = 672257056;
    static $url = 'https://books.zoho.com/api/v3/';
    static $books_token = 'd21f1ddaf79cdeb05294e97650ed3ce4';
    static $sub_url = '';
    static $response_key = '';
    static $primary = '';

    static $nonResponseKey
        = [
            'code',
            'message',
            'page_context',
        ];


    public function __construct()
    {
        self::$organization_id = 672257056;
    }


    public static function insert($data)
    {
        return static::call(static::url(), 'POST', [], $data);
    }

    public static function update($res, $data)
    {
        $id = self::getIdFromResponse($res);

        return static::call(static::url($id), 'PUT', [], $data);
    }

    public static function get($id = null, $page = null)
    {
        $query = [];
        $page && $query['page'] = $page;

        return static::call(static::url($id), 'GET', $query);
    }

    public static function getIdFromResponse($res)
    {
        $primary = static::$primary;

        return $id = (int)($res->body->$primary ?? $res->$primary ?? $res);
    }

    public static function activate($res, $activate = 1)
    {

        $id = static::getIdFromResponse($res);

        return static::call(static::url($id, $activate ? 'active' : 'inactive'), 'POST');
    }

    public static function inactivate($res)
    {
        return static::activate($res, 0);
    }

    public static function delete($res)
    {
        $id = static::getIdFromResponse($res);

        return static::call(static::url($id), 'DELETE');
    }

    public static function call($url, $method, $query = [], $data = [])
    {
        $response = static::call2($url, $method, $query, $data);
        if ($response->code === 57) {
            static::refreshToken();
            $response = static::call2($url, $method, $query, $data);
        }
        return $response;
    }

    public static function call2($url, $method, $query = [], $data = [])
    {
        $query['organization_id'] = config('zoho-books.organization_id');
        $ch = curl_init($url.'?'.http_build_query($query));

        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization:Bearer '.static::getToken(),
            'Content-Type:application/x-www-form-urlencoded',
        ]);

        switch (strtoupper($method)) {
            case "POST":
                curl_setopt($ch, CURLOPT_POST, true);
                break;
            case "PUT":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                break;
            case "DELETE":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
            case "GET":
                break;

        }
        count($data) && curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['JSONString' => json_encode($data)]));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $returned = curl_exec($ch);
        if (curl_error($ch)) {
            return (object)[
                'code'    => -1,
                'message' => 'curl error',
            ];
        }
        $returned = json_decode($returned);


        return static::response($returned);
    }



    static function url($id = null, $actions = [])
    {
        $action = '';
        foreach (is_array($actions) ? $actions : [$actions] as $k => $v) {
            is_string($k) ? $action .= $k.'/'.$v.'/' : $action .= $v.'/';
        }
        $action = trim($action, '/');
        $url = static::$url.static::$sub_url.($id ? '/'.$id : '').($action ? '/'.$action : '');

        return $url;
    }

    public static function getBody($response)
    {
        $keys = (array) (static::$response_key ?: static::$sub_url);
        foreach ($keys as $key) {
            if ($ret = data_get($response, $key) ?: data_get($response, str_singular($key))) {
                return $ret;
            }
        }

        return null;

    }

    protected static function response($returned)
    {
        $response = new \stdClass();

        $response->code = $returned->code;
        $response->message = $returned->message;
        $response->page_context = $returned->page_context ?? null;
        $response->body = static::getBody($returned);

        return $response;

    }

}