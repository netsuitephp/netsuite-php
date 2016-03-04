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
 * generated:  2016-03-04 07:23:27 PM UTC
 */

namespace NetSuite\Classes;

class LocationSearchBasic extends SearchRecordBasic {
    public $address;
    public $city;
    public $country;
    public $county;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $isInactive;
    public $isOffice;
    public $makeInventoryAvailable;
    public $makeInventoryAvailableStore;
    public $name;
    public $nameNoHierarchy;
    public $phone;
    public $state;
    public $subsidiary;
    public $tranprefix;
    public $zip;
    public $customFieldList;
    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "city" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isOffice" => "SearchBooleanField",
        "makeInventoryAvailable" => "SearchBooleanField",
        "makeInventoryAvailableStore" => "SearchBooleanField",
        "name" => "SearchStringField",
        "nameNoHierarchy" => "SearchStringField",
        "phone" => "SearchStringField",
        "state" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "tranprefix" => "SearchStringField",
        "zip" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}

