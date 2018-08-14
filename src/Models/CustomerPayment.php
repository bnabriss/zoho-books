<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-07
 * Time: 10:54 AM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class CustomerPayment extends Rest
{
    static $sub_url = 'customerpayments';
    static $primary = 'payment_id';
}