<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-05
 * Time: 4:16 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class BaseCurrencyAdjustment extends Rest
{
    static $sub_url = 'basecurrencyadjustment';
//    static $response_key = 'bankaccounts';
    static $primary = 'base_currency_adjustment_id';


}