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

class LocationSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $address;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $allowStorePickup;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $autoAssignmentRegionSetting;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $bufferStock;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $county;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $dailyShippingCapacity;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endTime;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $geolocationMethod;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isFriday;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isIncludeInCt;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isMonday;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isOffice;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isSaturday;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isSunday;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isThursday;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isTuesday;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isWednesday;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $latitude;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $locationType;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $longitude;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $makeInventoryAvailable;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $makeInventoryAvailableStore;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $nameNoHierarchy;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $nextPickupCutOffTime;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $sameDayPickupCutOffTime;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startTime;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $storePickupBufferStock;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $timeZone;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $totalShippingCapacity;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $tranprefix;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $usesBins;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $zip;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "allowStorePickup" => "SearchBooleanField",
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
        "isIncludeInCt" => "SearchBooleanField",
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
        "storePickupBufferStock" => "SearchDoubleField",
        "subsidiary" => "SearchMultiSelectField",
        "timeZone" => "SearchEnumMultiSelectField",
        "totalShippingCapacity" => "SearchLongField",
        "tranprefix" => "SearchStringField",
        "usesBins" => "SearchBooleanField",
        "zip" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
