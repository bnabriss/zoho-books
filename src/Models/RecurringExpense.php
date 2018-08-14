<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-07
 * Time: 10:55 AM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class RecurringExpense extends Rest
{
    static $sub_url = 'recurringexpenses';
    static $primary = 'recurring_expense_id';
}