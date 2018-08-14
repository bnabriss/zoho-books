<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-05
 * Time: 4:16 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class OpeningBalance extends Rest
{
    static $sub_url = 'settings/openingbalances';
    static $response_key = 'opening_balance';
    static $primary = 'account_id';


}