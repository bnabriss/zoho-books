<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-05
 * Time: 4:16 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class User extends Rest
{
    static $sub_url = 'users';
//    static $response_key = 'bankaccounts';
    static $primary = 'user_id';


}