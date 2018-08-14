<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-07
 * Time: 10:52 AM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class CreditNote extends Rest
{
    static $sub_url = 'creditnotes';
    static $primary = 'creditnote_id';
}