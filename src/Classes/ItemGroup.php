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

class ItemGroup extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var boolean
     */
    public $includeStartEndLines;
    /**
     * @var boolean
     */
    public $isVsoeBundle;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultItemShipMethod;
    /**
     * @var boolean
     */
    public $availableToPartners;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var string
     */
    public $upcCode;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $vendorName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueProduct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var boolean
     */
    public $includeChildren;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\ShippingCarrier
     */
    public $itemCarrier;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $itemShipMethodList;
    /**
     * @var boolean
     */
    public $printItems;
    /**
     * @var \NetSuite\Classes\ItemMemberList
     */
    public $memberList;
    /**
     * @var \NetSuite\Classes\TranslationList
     */
    public $translationsList;
    /**
     * @var \NetSuite\Classes\ItemGroupHierarchyVersionsList
     */
    public $hierarchyVersionsList;
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
        "hierarchyVersionsList" => "ItemGroupHierarchyVersionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
