<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

class Address extends Record {
    public $internalId;
    public $country;
    public $attention;
    public $addressee;
    public $addrPhone;
    public $addr1;
    public $addr2;
    public $addr3;
    public $city;
    public $state;
    public $zip;
    public $addrText;
    public $override;
    public $customFieldList;
    static $paramtypesmap = array(
        "internalId" => "string",
        "country" => "Country",
        "attention" => "string",
        "addressee" => "string",
        "addrPhone" => "string",
        "addr1" => "string",
        "addr2" => "string",
        "addr3" => "string",
        "city" => "string",
        "state" => "string",
        "zip" => "string",
        "addrText" => "string",
        "override" => "boolean",
        "customFieldList" => "CustomFieldList",
    );
}
