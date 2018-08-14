<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-05
 * Time: 4:16 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class Project extends Rest
{
    static $sub_url = 'projects';
//    static $response_key = 'bankaccounts';
    static $primary = 'project_id';


}