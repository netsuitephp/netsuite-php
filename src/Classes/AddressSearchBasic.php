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

class AddressSearchBasic extends SearchRecordBasic {
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
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $override;
    public $phone;
    public $state;
    public $zip;
    public $customFieldList;
    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "address1" => "SearchStringField",
        "address2" => "SearchStringField",
        "address3" => "SearchStringField",
        "addressee" => "SearchStringField",
        "attention" => "SearchStringField",
        "city" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "countryCode" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "override" => "SearchBooleanField",
        "phone" => "SearchStringField",
        "state" => "SearchStringField",
        "zip" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
