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

class ItemGroup extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $includeStartEndLines;
    public $isVsoeBundle;
    public $defaultItemShipMethod;
    public $availableToPartners;
    public $isInactive;
    public $itemId;
    public $upcCode;
    public $displayName;
    public $vendorName;
    public $issueProduct;
    public $parent;
    public $description;
    public $subsidiaryList;
    public $includeChildren;
    public $department;
    public $class;
    public $location;
    public $itemCarrier;
    public $itemShipMethodList;
    public $printItems;
    public $memberList;
    public $translationsList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "includeStartEndLines" => "boolean",
        "isVsoeBundle" => "boolean",
        "defaultItemShipMethod" => "RecordRef",
        "availableToPartners" => "boolean",
        "isInactive" => "boolean",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "issueProduct" => "RecordRef",
        "parent" => "RecordRef",
        "description" => "string",
        "subsidiaryList" => "RecordRefList",
        "includeChildren" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "itemShipMethodList" => "RecordRefList",
        "printItems" => "boolean",
        "memberList" => "ItemMemberList",
        "translationsList" => "TranslationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
