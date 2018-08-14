<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-05
 * Time: 4:16 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class TimeEntrie extends Rest
{
    static $sub_url = 'projects/timeentries';
    static $response_key = 'time_entries';
    static $primary = 'time_entry_id';


}