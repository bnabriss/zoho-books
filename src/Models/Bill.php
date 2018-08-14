<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-07
 * Time: 10:49 AM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class Bill extends Rest
{
    static $sub_url = 'bills';
    static $primary = 'bill_id';
}