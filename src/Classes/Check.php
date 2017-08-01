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

class Check extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $status;
    public $customForm;
    public $account;
    public $balance;
    public $entity;
    public $address;
    public $subsidiary;
    public $postingPeriod;
    public $tranDate;
    public $currency;
    public $voidJournal;
    public $exchangeRate;
    public $toBePrinted;
    public $tranId;
    public $memo;
    public $department;
    public $taxTotal;
    public $class;
    public $tax2Total;
    public $location;
    public $userTotal;
    public $landedCostMethod;
    public $landedCostPerLine;
    public $transactionNumber;
    public $expenseList;
    public $itemList;
    public $accountingBookDetailList;
    public $landedCostsList;
    public $billPay;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "status" => "string",
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "balance" => "float",
        "entity" => "RecordRef",
        "address" => "string",
        "subsidiary" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "tranDate" => "dateTime",
        "currency" => "RecordRef",
        "voidJournal" => "RecordRef",
        "exchangeRate" => "float",
        "toBePrinted" => "boolean",
        "tranId" => "string",
        "memo" => "string",
        "department" => "RecordRef",
        "taxTotal" => "float",
        "class" => "RecordRef",
        "tax2Total" => "float",
        "location" => "RecordRef",
        "userTotal" => "float",
        "landedCostMethod" => "LandedCostMethod",
        "landedCostPerLine" => "boolean",
        "transactionNumber" => "string",
        "expenseList" => "CheckExpenseList",
        "itemList" => "CheckItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "landedCostsList" => "CheckLandedCostList",
        "billPay" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
