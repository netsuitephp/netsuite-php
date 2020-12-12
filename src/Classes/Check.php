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

class Check extends Record {
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
    public $status;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $voidJournal;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var boolean
     */
    public $toBePrinted;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var float
     */
    public $userTotal;
    /**
     * @var \NetSuite\Classes\LandedCostMethod
     */
    public $landedCostMethod;
    /**
     * @var boolean
     */
    public $landedCostPerLine;
    /**
     * @var string
     */
    public $transactionNumber;
    /**
     * @var \NetSuite\Classes\CheckExpenseList
     */
    public $expenseList;
    /**
     * @var \NetSuite\Classes\CheckItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\CheckLandedCostList
     */
    public $landedCostsList;
    /**
     * @var boolean
     */
    public $billPay;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $payeeAddressList;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $payeeAddress;
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
        "status" => "string",
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "balance" => "float",
        "entity" => "RecordRef",
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
        "payeeAddressList" => "RecordRef",
        "payeeAddress" => "Address",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
