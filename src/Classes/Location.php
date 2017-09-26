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

class Location extends Record {
    public $name;
    public $parent;
    public $includeChildren;
    public $subsidiaryList;
    public $isInactive;
    public $tranPrefix;
    public $mainAddress;
    public $returnAddress;
    public $locationType;
    public $timeZone;
    public $latitude;
    public $longitude;
    public $logo;
    public $useBins;
    public $makeInventoryAvailable;
    public $makeInventoryAvailableStore;
    public $geolocationMethod;
    public $autoAssignmentRegionSetting;
    public $nextPickupCutOffTime;
    public $bufferStock;
    public $dailyShippingCapacity;
    public $totalShippingCapacity;
    public $includeLocationRegionsList;
    public $excludeLocationRegionsList;
    public $businessHoursList;
    public $classTranslationList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "name" => "string",
        "parent" => "RecordRef",
        "includeChildren" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "isInactive" => "boolean",
        "tranPrefix" => "string",
        "mainAddress" => "Address",
        "returnAddress" => "Address",
        "locationType" => "LocationType",
        "timeZone" => "LocationTimeZone",
        "latitude" => "float",
        "longitude" => "float",
        "logo" => "RecordRef",
        "useBins" => "boolean",
        "makeInventoryAvailable" => "boolean",
        "makeInventoryAvailableStore" => "boolean",
        "geolocationMethod" => "LocationGeolocationMethod",
        "autoAssignmentRegionSetting" => "LocationAutoAssignmentRegionSetting",
        "nextPickupCutOffTime" => "dateTime",
        "bufferStock" => "integer",
        "dailyShippingCapacity" => "integer",
        "totalShippingCapacity" => "integer",
        "includeLocationRegionsList" => "LocationRegionsList",
        "excludeLocationRegionsList" => "LocationRegionsList",
        "businessHoursList" => "LocationBusinessHoursList",
        "classTranslationList" => "ClassTranslationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
