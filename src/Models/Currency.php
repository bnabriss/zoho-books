<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-05
 * Time: 4:16 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class Currency extends Rest
{
    static $sub_url = 'settings/currencies';
    static $response_key = 'currencies';
    static $primary = 'currency_id';


}