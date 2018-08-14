<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-07
 * Time: 12:44 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class ChartOfAccount extends Rest
{

    static $sub_url = 'chartofaccounts';
    static $primary = 'account_id';
}