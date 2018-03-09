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

class LocationSearchRowBasic extends SearchRowBasic {
    public $address1;
    public $address2;
    public $address3;
    public $autoAssignmentRegionSetting;
    public $bufferStock;
    public $city;
    public $country;
    public $dailyShippingCapacity;
    public $endTime;
    public $externalId;
    public $geolocationMethod;
    public $internalId;
    public $isFriday;
    public $isInactive;
    public $isMonday;
    public $isOffice;
    public $isSaturday;
    public $isSunday;
    public $isThursday;
    public $isTuesday;
    public $isWednesday;
    public $latitude;
    public $locationType;
    public $longitude;
    public $makeInventoryAvailable;
    public $makeInventoryAvailableStore;
    public $name;
    public $nameNoHierarchy;
    public $nextPickupCutOffTime;
    public $phone;
    public $sameDayPickupCutOffTime;
    public $startTime;
    public $state;
    public $subsidiary;
    public $timeZone;
    public $totalShippingCapacity;
    public $tranPrefix;
    public $usesBins;
    public $zip;
    public $customFieldList;
    static $paramtypesmap = array(
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "autoAssignmentRegionSetting" => "SearchColumnEnumSelectField[]",
        "bufferStock" => "SearchColumnLongField[]",
        "city" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "dailyShippingCapacity" => "SearchColumnLongField[]",
        "endTime" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "geolocationMethod" => "SearchColumnEnumSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isFriday" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isMonday" => "SearchColumnBooleanField[]",
        "isOffice" => "SearchColumnBooleanField[]",
        "isSaturday" => "SearchColumnBooleanField[]",
        "isSunday" => "SearchColumnBooleanField[]",
        "isThursday" => "SearchColumnBooleanField[]",
        "isTuesday" => "SearchColumnBooleanField[]",
        "isWednesday" => "SearchColumnBooleanField[]",
        "latitude" => "SearchColumnDoubleField[]",
        "locationType" => "SearchColumnEnumSelectField[]",
        "longitude" => "SearchColumnDoubleField[]",
        "makeInventoryAvailable" => "SearchColumnBooleanField[]",
        "makeInventoryAvailableStore" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "nameNoHierarchy" => "SearchColumnStringField[]",
        "nextPickupCutOffTime" => "SearchColumnDateField[]",
        "phone" => "SearchColumnStringField[]",
        "sameDayPickupCutOffTime" => "SearchColumnDateField[]",
        "startTime" => "SearchColumnDateField[]",
        "state" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "timeZone" => "SearchColumnEnumSelectField[]",
        "totalShippingCapacity" => "SearchColumnLongField[]",
        "tranPrefix" => "SearchColumnStringField[]",
        "usesBins" => "SearchColumnBooleanField[]",
        "zip" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
