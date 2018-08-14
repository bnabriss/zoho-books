<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-07
 * Time: 10:46 AM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class SalesOrder extends Rest
{
    static $sub_url = 'salesorders';
    static $primary = 'salesorder_id';

}