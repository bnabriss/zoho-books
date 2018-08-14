<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-07
 * Time: 10:55 AM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class Expense extends Rest
{
    static $sub_url = 'expenses';
    static $primary = 'expense_id';
}