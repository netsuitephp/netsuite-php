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

class InventoryAdjustment extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var float
     */
    public $estimatedTotalValue;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
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
    public $adjLocation;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\InventoryAdjustmentInventoryList
     */
    public $inventoryList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
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
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "createdDate" => "dateTime",
        "tranId" => "string",
        "lastModifiedDate" => "dateTime",
        "subsidiary" => "RecordRef",
        "account" => "RecordRef",
        "customForm" => "RecordRef",
        "estimatedTotalValue" => "float",
        "customer" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "adjLocation" => "RecordRef",
        "location" => "RecordRef",
        "memo" => "string",
        "inventoryList" => "InventoryAdjustmentInventoryList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
