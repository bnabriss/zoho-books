<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-07
 * Time: 10:49 AM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class VendorCredit extends Rest
{
    static $sub_url = 'vendorcredits';
    static $primary = 'vendor_credit_id';
}