<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-06
 * Time: 9:20 AM
 */

namespace Bnabriss\ZohoBooks;

class Response
{
    public $code;
    public $message;
    public $body;
    public $page_context;

    static $nonResponseKey = [
        'code',
        'message',
        'page_context',
    ];

    public function __construct($returned, $bodyKey)
    {
        $this->code = $returned->code;
        $this->message = $returned->message;
        $this->page_context = $returned->page_context ?? null;
        // find body by key
        $this->body = $returned->{$bodyKey} ?? $returned->{str_singular($bodyKey)} ?? null;
        // find body by excluding
        if ( ! $this->body) {
            foreach ($returned as $key => $value){
                if ( ! in_array($key, self::$nonResponseKey)){
                    $this->body = $returned->$key;
                    break;
                }
            }
        }

    }

    public static function new($returned, $bodyKey)
    {
        return new self($returned, $bodyKey);
    }
}






