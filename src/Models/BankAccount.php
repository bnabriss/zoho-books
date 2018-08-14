<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-05
 * Time: 4:16 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class BankAccount extends Rest
{
    static $sub_url = 'bankaccounts';
//    static $response_key = 'bankaccounts';
    static $primary = 'account_id';


}