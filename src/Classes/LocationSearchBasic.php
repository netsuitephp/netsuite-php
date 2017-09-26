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

class LocationSearchBasic extends SearchRecordBasic {
    public $address;
    public $autoAssignmentRegionSetting;
    public $bufferStock;
    public $city;
    public $country;
    public $county;
    public $dailyShippingCapacity;
    public $endTime;
    public $externalId;
    public $externalIdString;
    public $geolocationMethod;
    public $internalId;
    public $internalIdNumber;
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
    public $tranprefix;
    public $usesBins;
    public $zip;
    public $customFieldList;
    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "autoAssignmentRegionSetting" => "SearchEnumMultiSelectField",
        "bufferStock" => "SearchLongField",
        "city" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "dailyShippingCapacity" => "SearchLongField",
        "endTime" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "geolocationMethod" => "SearchEnumMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isFriday" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isMonday" => "SearchBooleanField",
        "isOffice" => "SearchBooleanField",
        "isSaturday" => "SearchBooleanField",
        "isSunday" => "SearchBooleanField",
        "isThursday" => "SearchBooleanField",
        "isTuesday" => "SearchBooleanField",
        "isWednesday" => "SearchBooleanField",
        "latitude" => "SearchDoubleField",
        "locationType" => "SearchEnumMultiSelectField",
        "longitude" => "SearchDoubleField",
        "makeInventoryAvailable" => "SearchBooleanField",
        "makeInventoryAvailableStore" => "SearchBooleanField",
        "name" => "SearchStringField",
        "nameNoHierarchy" => "SearchStringField",
        "nextPickupCutOffTime" => "SearchDateField",
        "phone" => "SearchStringField",
        "sameDayPickupCutOffTime" => "SearchDateField",
        "startTime" => "SearchDateField",
        "state" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "timeZone" => "SearchEnumMultiSelectField",
        "totalShippingCapacity" => "SearchLongField",
        "tranprefix" => "SearchStringField",
        "usesBins" => "SearchBooleanField",
        "zip" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
