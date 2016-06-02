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
 * generated:  2016-06-02 02:54:03 PM UTC
 */

namespace NetSuite\Classes;

class LocationSearchRowBasic extends SearchRowBasic {
    public $address1;
    public $address2;
    public $address3;
    public $automaticLatLongSetup;
    public $city;
    public $country;
    public $externalId;
    public $internalId;
    public $isInactive;
    public $isOffice;
    public $latitude;
    public $longitude;
    public $makeInventoryAvailable;
    public $makeInventoryAvailableStore;
    public $name;
    public $nameNoHierarchy;
    public $phone;
    public $state;
    public $subsidiary;
    public $timeZone;
    public $tranPrefix;
    public $zip;
    public $customFieldList;
    static $paramtypesmap = array(
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "automaticLatLongSetup" => "SearchColumnBooleanField[]",
        "city" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isOffice" => "SearchColumnBooleanField[]",
        "latitude" => "SearchColumnDoubleField[]",
        "longitude" => "SearchColumnDoubleField[]",
        "makeInventoryAvailable" => "SearchColumnBooleanField[]",
        "makeInventoryAvailableStore" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "nameNoHierarchy" => "SearchColumnStringField[]",
        "phone" => "SearchColumnStringField[]",
        "state" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "timeZone" => "SearchColumnEnumSelectField[]",
        "tranPrefix" => "SearchColumnStringField[]",
        "zip" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
