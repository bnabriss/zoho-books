<?php
/**
 * Created by PhpStorm.
 * User: Bassam
 * Date: 2018-08-06
 * Time: 3:01 PM
 */

namespace Bnabriss\ZohoBooks\Models;


use Bnabriss\ZohoBooks\Rest;

class ContactPerson extends Rest
{
    static $sub_url = 'contacts/contactpersons';
    static $primary = 'contact_person_id';
    static $response_key = 'contact_persons';
    static $paging_key = 'page_context';

}