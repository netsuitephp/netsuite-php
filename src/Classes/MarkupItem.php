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

class MarkupItem extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $description;
    /**
     * @var boolean
     */
    public $nonPosting;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var boolean
     */
    public $includeChildren;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var boolean
     */
    public $isPreTax;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueProduct;
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
    public $parent;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $availableToPartners;
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
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxSchedule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $deferredRevenueAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expenseAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $incomeAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesTaxCode;
    /**
     * @var \NetSuite\Classes\TranslationList
     */
    public $translationsList;
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
        "description" => "string",
        "nonPosting" => "boolean",
        "account" => "RecordRef",
        "includeChildren" => "boolean",
        "rate" => "string",
        "isPreTax" => "boolean",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "issueProduct" => "RecordRef",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "taxSchedule" => "RecordRef",
        "deferredRevenueAccount" => "RecordRef",
        "expenseAccount" => "RecordRef",
        "incomeAccount" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "salesTaxCode" => "RecordRef",
        "translationsList" => "TranslationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
