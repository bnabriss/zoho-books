<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-06
 * Time: 12:49 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class Contact extends Rest
{
    static $sub_url = 'contacts';
    static $primary = 'contact_id';
    static $response_key
        = [
            'contacts',
        ];
}