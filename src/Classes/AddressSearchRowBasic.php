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

class AddressSearchRowBasic extends SearchRowBasic {
    public $address;
    public $address1;
    public $address2;
    public $address3;
    public $addressee;
    public $attention;
    public $city;
    public $country;
    public $countryCode;
    public $externalId;
    public $internalId;
    public $override;
    public $phone;
    public $state;
    public $zip;
    public $customFieldList;
    static $paramtypesmap = array(
        "address" => "SearchColumnStringField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "addressee" => "SearchColumnStringField[]",
        "attention" => "SearchColumnStringField[]",
        "city" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "override" => "SearchColumnBooleanField[]",
        "phone" => "SearchColumnStringField[]",
        "state" => "SearchColumnStringField[]",
        "zip" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
