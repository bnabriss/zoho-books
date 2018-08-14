<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-06
 * Time: 2:13 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class Invoice extends Rest
{
    static $sub_url = 'invoices';
    static $primary = 'invoice_id';

}