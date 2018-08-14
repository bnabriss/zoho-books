<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-06
 * Time: 12:49 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class Tax extends Rest
{
    static $sub_url = 'settings/taxes';
    static $response_key = 'taxes';
    static $primary = 'tax_id';
}