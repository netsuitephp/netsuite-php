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

class InventoryAdjustment extends Record {
    public $postingPeriod;
    public $tranDate;
    public $createdDate;
    public $tranId;
    public $lastModifiedDate;
    public $subsidiary;
    public $account;
    public $customForm;
    public $estimatedTotalValue;
    public $customer;
    public $department;
    public $class;
    public $adjLocation;
    public $location;
    public $memo;
    public $inventoryList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
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
