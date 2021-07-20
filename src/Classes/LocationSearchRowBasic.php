<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class LocationSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address3;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $allowStorePickup;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $autoAssignmentRegionSetting;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $bufferStock;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $dailyShippingCapacity;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endTime;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $geolocationMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isFriday;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isIncludeInCt;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isMonday;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isOffice;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isSaturday;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isSunday;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isThursday;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isTuesday;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isWednesday;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $latitude;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $locationType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $longitude;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $makeInventoryAvailable;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $makeInventoryAvailableStore;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $nameNoHierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $nextPickupCutOffTime;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $sameDayPickupCutOffTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $soPredConfidence;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $soPredictedDays;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startTime;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $storePickupBufferStock;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $timeZone;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $totalShippingCapacity;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $tranPrefix;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $usesBins;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $zip;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "allowStorePickup" => "SearchColumnBooleanField[]",
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
        "isIncludeInCt" => "SearchColumnBooleanField[]",
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
        "soPredConfidence" => "SearchColumnDoubleField[]",
        "soPredictedDays" => "SearchColumnLongField[]",
        "startTime" => "SearchColumnDateField[]",
        "state" => "SearchColumnStringField[]",
        "storePickupBufferStock" => "SearchColumnDoubleField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "timeZone" => "SearchColumnEnumSelectField[]",
        "totalShippingCapacity" => "SearchColumnLongField[]",
        "tranPrefix" => "SearchColumnStringField[]",
        "usesBins" => "SearchColumnBooleanField[]",
        "zip" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
