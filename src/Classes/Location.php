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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class Location extends Record {
    /**
     * @var string
     */
    public $name;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var boolean
     */
    public $includeChildren;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $tranPrefix;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $mainAddress;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $returnAddress;
    /**
     * @var \NetSuite\Classes\LocationType
     */
    public $locationType;
    /**
     * @var \NetSuite\Classes\LocationTimeZone
     */
    public $timeZone;
    /**
     * @var float
     */
    public $latitude;
    /**
     * @var float
     */
    public $longitude;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $logo;
    /**
     * @var boolean
     */
    public $useBins;
    /**
     * @var boolean
     */
    public $makeInventoryAvailable;
    /**
     * @var boolean
     */
    public $makeInventoryAvailableStore;
    /**
     * @var \NetSuite\Classes\LocationGeolocationMethod
     */
    public $geolocationMethod;
    /**
     * @var \NetSuite\Classes\LocationAutoAssignmentRegionSetting
     */
    public $autoAssignmentRegionSetting;
    /**
     * @var string
     */
    public $nextPickupCutOffTime;
    /**
     * @var integer
     */
    public $bufferStock;
    /**
     * @var boolean
     */
    public $allowStorePickup;
    /**
     * @var float
     */
    public $storePickupBufferStock;
    /**
     * @var integer
     */
    public $dailyShippingCapacity;
    /**
     * @var integer
     */
    public $totalShippingCapacity;
    /**
     * @var \NetSuite\Classes\LocationRegionsList
     */
    public $includeLocationRegionsList;
    /**
     * @var \NetSuite\Classes\LocationRegionsList
     */
    public $excludeLocationRegionsList;
    /**
     * @var \NetSuite\Classes\LocationBusinessHoursList
     */
    public $businessHoursList;
    /**
     * @var \NetSuite\Classes\ClassTranslationList
     */
    public $classTranslationList;
    /**
     * @var boolean
     */
    public $includeInControlTower;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
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
        "allowStorePickup" => "boolean",
        "storePickupBufferStock" => "float",
        "dailyShippingCapacity" => "integer",
        "totalShippingCapacity" => "integer",
        "includeLocationRegionsList" => "LocationRegionsList",
        "excludeLocationRegionsList" => "LocationRegionsList",
        "businessHoursList" => "LocationBusinessHoursList",
        "classTranslationList" => "ClassTranslationList",
        "includeInControlTower" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
