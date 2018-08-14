<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-07
 * Time: 10:49 AM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class RecurringInvoice extends Rest
{
    static $sub_url = 'recurringinvoices';
    static $primary = 'recurring_invoice_id';
}